<?php

namespace App\Http\Controllers;

use App\Services\WhatsAppService;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    protected $whatsappService;

    public function __construct(WhatsAppService $whatsappService)
    {
        $this->whatsappService = $whatsappService;
    }

    public function sendWhatsAppMessage(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|string', // Phone number to send to
            'message' => 'required|string', // The message to send
        ]);

        $response = $this->whatsappService->sendMessage($validated['phone'], $validated['message']);

        return response()->json([
            'status' => 'Message sent',
            'response' => $response
        ]);
    }
}
