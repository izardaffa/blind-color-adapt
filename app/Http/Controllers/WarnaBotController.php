<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WarnaBotController extends Controller
{
    public function index()
    {
        return view('ai-assistant-warnabot.index');
    }

    public function chat(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'text' => 'required|string|max:500'
            ]);

            $userMessage = $request->input('text');
            
            // Filter pertanyaan yang tidak relevan
            if (!$this->isColorBlindnessRelated($userMessage)) {
                return response()->json([
                    'response' => 'Maaf, saya hanya dapat menjawab pertanyaan seputar buta warna, tes penglihatan warna, dan topik terkait. Silakan ajukan pertanyaan tentang buta warna.'
                ]);
            }

            $response = $this->callGeminiAPI($userMessage);

            if ($response) {
                // Clean formatting dari response Gemini
                $cleanResponse = $this->cleanGeminiResponse($response);
                
                return response()->json([
                    'response' => $cleanResponse
                ]);
            } else {
                return response()->json([
                    'error' => 'Tidak dapat menghubungi AI assistant saat ini.'
                ], 500);
            }

        } catch (\Exception $e) {
            Log::error('WarnaBotController error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Terjadi kesalahan sistem.'
            ], 500);
        }
    }

    private function isColorBlindnessRelated(string $message): bool
    {
        $keywords = [
            'buta warna', 'color blind', 'colorblind', 'warna', 'color', 
            'ishihara', 'tes mata', 'mata', 'penglihatan', 'vision',
            'protanopia', 'deuteranopia', 'tritanopia', 'monochrome',
            'kacamata', 'glasses', 'dokter mata', 'optometrist',
            'merah', 'hijau', 'biru', 'red', 'green', 'blue',
            'pekerjaan', 'karir', 'job', 'career', 'profesi'
        ];

        $lowerMessage = strtolower($message);
        
        foreach ($keywords as $keyword) {
            if (strpos($lowerMessage, $keyword) !== false) {
                return true;
            }
        }
        
        return false;
    }

    private function callGeminiAPI(string $message): ?string
    {
        $apiKey = env('GEMINI_API_KEY');
        
        if (!$apiKey) {
            Log::error('Gemini API key not configured');
            return null;
        }

        $prompt = $this->buildPrompt($message);

        try {
            $response = Http::timeout(30)->post(
                "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}",
                [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'topK' => 40,
                        'topP' => 0.95,
                        'maxOutputTokens' => 300, // Batasi panjang response
                        'stopSequences' => []
                    ]
                ]
            );

            if ($response->successful()) {
                $data = $response->json();
                
                if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                    return $data['candidates'][0]['content']['parts'][0]['text'];
                }
            }

            Log::error('Gemini API error: ' . $response->body());
            return null;

        } catch (\Exception $e) {
            Log::error('Gemini API call failed: ' . $e->getMessage());
            return null;
        }
    }

    private function buildPrompt(string $userMessage): string
    {
        return "Anda adalah WarnaBot, asisten AI khusus untuk menjawab pertanyaan seputar buta warna.

ATURAN PENTING:
- Jawab HANYA dalam bahasa Indonesia
- Maksimal 2-3 kalimat per jawaban  
- Fokus HANYA pada topik buta warna, tes penglihatan warna, dan topik terkait
- Jangan gunakan format markdown (**bold**, *italic*, dll)
- Jangan gunakan bullet points atau numbering
- Jawab dengan bahasa yang mudah dipahami
- Berikan informasi yang akurat dan medis

TOPIK YANG BOLEH DIJAWAB:
- Definisi dan jenis buta warna
- Penyebab buta warna
- Tes Ishihara dan tes penglihatan warna lainnya
- Solusi dan alat bantu untuk buta warna
- Karir dan pekerjaan yang sesuai untuk penderita buta warna
- Tips hidup dengan buta warna
- Informasi medis seputar buta warna

PERTANYAAN USER: {$userMessage}

JAWABAN SINGKAT:";
    }

    private function cleanGeminiResponse(string $response): string
    {
        // Hapus formatting markdown
        $response = preg_replace('/\*\*(.*?)\*\*/', '$1', $response); // Bold
        $response = preg_replace('/\*(.*?)\*/', '$1', $response); // Italic
        $response = preg_replace('/`(.*?)`/', '$1', $response); // Code
        $response = preg_replace('/#{1,6}\s*/', '', $response); // Headers
        
        // Hapus bullet points dan numbering
        $response = preg_replace('/^[\s]*[-\*\+]\s*/m', '', $response);
        $response = preg_replace('/^[\s]*\d+\.\s*/m', '', $response);
        
        // Bersihkan spasi berlebih
        $response = preg_replace('/\n\s*\n/', ' ', $response);
        $response = preg_replace('/\s+/', ' ', $response);
        
        // Trim dan batasi panjang jika terlalu panjang
        $response = trim($response);
        
        if (strlen($response) > 400) {
            $response = substr($response, 0, 400);
            $lastSpace = strrpos($response, ' ');
            if ($lastSpace !== false) {
                $response = substr($response, 0, $lastSpace) . '...';
            }
        }
        
        return $response;
    }
}
