<?php

namespace App\Http\Controllers;

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Http\Request;

class WarnaBotController extends Controller
{
    public function chat(Request $request)
    {
        try {
            $text = $request->input('text');
            
            if (empty($text)) {
                return response()->json(['error' => 'Text is required'], 400);
            }

            $client = new Client(env('GEMINI_API_KEY'));

            $response = $client->geminiProFlash1_5()->generateContent(
                new TextPart($text),
            );

            return response()->json(['response' => $response->text()]);
            
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
