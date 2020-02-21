<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('hai');
        $this->ask('Siapa nama kamu?', function($answer){
        	$this->say('Senang berkenalan denganmu, '.$answer->getText());
        });

    }
}
