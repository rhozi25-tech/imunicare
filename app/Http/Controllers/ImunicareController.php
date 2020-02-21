<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImunicareController extends Controller
{
    public function imun(BotMan $bot)
    {
        $bot->startConversation(new ImunicareConversation());
    }
}
