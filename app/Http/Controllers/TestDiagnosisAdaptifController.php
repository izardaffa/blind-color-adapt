<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

class TestDiagnosisAdaptifController extends Controller
{
    public function index()
    {
        return view('tes-diagnosis-adaptif.index');
    }

    public function test()
    {
        return view('tes-diagnosis-adaptif.test');
    }

    public function validate(Request $request)
    {
        try {
            $answers = $request->input('answers');
            
            if (empty($answers)) {
                return response()->json(['error' => 'Answers are required'], 400);
            }

            // Jawaban benar untuk penglihatan normal
            $correctAnswers = ['74', '6', '16', '2', '29', '7', '45', '5'];

            // Format jawaban untuk dikirim ke Gemini dengan konteks
            $answerText = "Hasil Tes Ishihara (8 soal):\n";
            $correctCount = 0;
            
            foreach ($answers as $index => $answer) {
                $questionNumber = $index + 1;
                $correctAnswer = $correctAnswers[$index] ?? 'Unknown';
                
                // Cek apakah jawaban benar
                $isCorrect = ($answer === $correctAnswer) ? '✓' : '✗';
                if ($answer === $correctAnswer) {
                    $correctCount++;
                }
                
                $answerText .= "Soal {$questionNumber}: Jawaban pasien = '{$answer}' | Jawaban normal = '{$correctAnswer}' | Status: {$isCorrect}\n";
            }
            
            $answerText .= "\nRingkasan: {$correctCount} dari 8 jawaban benar\n";

            // Prompt untuk Gemini dengan konteks medis yang lebih detail
            $prompt = "Sebagai dokter mata yang berpengalaman dalam tes buta warna Ishihara, tolong analisis hasil tes berikut ini:

KONTEKS TES ISHIHARA:
- Tes terdiri dari 8 soal gambar lingkaran berwarna dengan angka tersembunyi
- Jawaban 'Tidak ada' berarti pasien tidak dapat melihat angka sama sekali
- Orang dengan penglihatan normal dapat melihat semua angka dengan benar
- Pola kesalahan tertentu menunjukkan jenis buta warna spesifik

HASIL TES PASIEN:
{$answerText}

ANALISIS YANG DIBUTUHKAN:
1. Berdasarkan pola jawaban, tentukan apakah pasien memiliki penglihatan warna normal atau mengalami gangguan
2. Jika ada gangguan, identifikasi jenis buta warna (Protanopia, Deuteranopia, atau Tritanopia)
3. Tentukan tingkat keparahan berdasarkan jumlah kesalahan

Tolong berikan diagnosis dalam format berikut:

**STATUS PENGLIHATAN:** [Normal/Kemungkinan Buta Warna Ringan/Kemungkinan Buta Warna Sedang/Kemungkinan Buta Warna Berat]

**JENIS GANGGUAN:** [Normal/Protanopia (Buta Merah)/Deuteranopia (Buta Hijau)/Tritanopia (Buta Biru)/Tidak dapat ditentukan]

**ANALISIS HASIL:**
[Penjelasan detail berdasarkan pola jawaban dan persentase kebenaran]

**REKOMENDASI:**
[Saran medis dan langkah selanjutnya untuk pasien]

**CATATAN PENTING:**
[Informasi tambahan tentang kondisi dan kehidupan sehari-hari]";

            $client = new Client(env('GEMINI_API_KEY'));

            $response = $client->geminiProFlash1_5()->generateContent(
                new TextPart($prompt),
            );

            return response()->json([
                'success' => true,
                'diagnosis' => $response->text(),
                'answers' => $answers,
                'correctAnswers' => $correctAnswers,
                'score' => $correctCount,
                'totalQuestions' => 8
            ]);
            
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
