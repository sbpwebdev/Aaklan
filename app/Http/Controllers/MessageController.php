<?php
namespace App\Http\Controllers;
use App\Services\WhatsAppService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    protected $whatsAppService;

    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }

    // This method processes the form submission
    public function sendMessage(Request $request)
    {
        $to = $request->input('to');
        $message = $request->input('message');

        if ($this->whatsAppService->sendWhatsAppMessage($to, $message)) {
            return response()->json(['status' => 'Message sent successfully!']);
        } else {
            return response()->json(['status' => 'Failed to send message.']);
        }
    }
}
