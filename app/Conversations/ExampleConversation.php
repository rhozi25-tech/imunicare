<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class ExampleConversation extends Conversation
{
    /**
     * First question
     */
    public function askReason()
    {
        $question = Question::create('pilih jenis vaksinasi :')
            ->addButtons([
                Button::create('Vaksinasi BCG')->value('Vaksinasi BCG'),
                Button::create('Vaksinasi bOPV (Tipe 1 dan Tipe 3)')->value('Vaksinasi boPV'),
                Button::create('Vaksinasi Measles-Rubella (MR)')->value('Vaksinasi MR'),
                Button::create('Vaksinasi Demam Thypoid')->value('Vaksinasi Demam Thypoid'),
                Button::create('Vaksinasi DT, Td, TT')->value('Vaksinasi DT, Td, TT'),
                Button::create('Vaksinasi DTP-HB-Hib')->value('Vaksinasi DTP-HB-Hib'),
                Button::create('Vaksinasi Hepatitis B')->value('Vaksinasi Hepatitis B'),
                Button::create('Vaksinasi Influenza')->value('Vaksinasi Influenza'),
                Button::create('Vaksinasi Kanker Cervix')->value('Vaksinasi Kanker Cervix'),
                Button::create('Vaksinasi Pneumonia')->value('Vaksinasi Pneumonia'),
                Button::create('Vaksinasi Rabies')->value('Vaksinasi Rabies'),
                Button::create('Vaksinasi Rotavirus')->value('Vaksinasi Rotavirus'),
                Button::create('Vaksinasi Varicella')->value('Vaksinasi Varicella'),
            ]);

       $this->ask($question, function($answer){
            if ($answer->isInteractiveMessageReply()) {
                $this->say($answer->getText());
            } else {
                $this->repeat();
            }
        });
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->askReason();
    }
}
