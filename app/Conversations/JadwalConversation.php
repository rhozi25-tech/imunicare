<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class JadwalConversation extends Conversation
{
    /**
     * First question
     */
    
    @return 

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->say('Hello');
        $this->ask('nama kamu?', function ($answer){
            $this->say('nice, '.$answer->getText());
        });

    }
}
