<?php


namespace App\Facades;
use Illuminate\Support\Facades\Facade;

/**
 *  @method static void sendMessage(string $message)
 */
class TgBot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tgbot';
    }
}
