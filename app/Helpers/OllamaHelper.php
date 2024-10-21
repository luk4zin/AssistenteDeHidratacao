<?php

if (!function_exists('generateSuggestionWithOllama')) {
    function generateSuggestionWithOllama($prompt)
    {
        $url = "http://localhost:11434/api/generate";

        $data = [
            "model" => "llama2",
            "prompt" => $prompt
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Erro no cURL: ' . curl_error($ch);
        }

        curl_close($ch);

        $result = json_decode($response, true);
        return $result['response'] ?? 'Nenhuma resposta gerada.';
    }
}
