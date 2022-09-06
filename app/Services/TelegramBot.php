<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramBot
{
    const url = 'https://api.tlgr.org/bot';
    protected $bot;
    protected $admin;


    public function __construct($bot, $admin)
    {
        $this->bot = $bot;
        $this->admin = $admin;
    }

    public function sendMessage($message, $user_id = null)
    {
        Http::post(self::url . $this->bot . '/sendMessage', [
            'chat_id' => $user_id ?? $this->admin,
            'text'=> $message
        ]);
    }
}
