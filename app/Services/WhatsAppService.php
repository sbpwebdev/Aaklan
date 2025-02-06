<?php

namespace App\Services;

use GuzzleHttp\Client;

class WhatsAppService
{
    protected $client;
    protected $url;
    protected $accessToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = env('WHATSAPP_API_URL');
        $this->accessToken = env('WHATSAPP_ACCESS_TOKEN');
    }

    public function sendMessage($to, $message)
    {
        $response = $this->client->post($this->url, [
            'json' => [
                'messaging_product' => 'whatsapp',
                'to' => $to,
                'text' => [
                    'body' => $message,
                ],
            ],
            'headers' => [
                'Authorization' => "Bearer " . $this->accessToken,
            ],
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
