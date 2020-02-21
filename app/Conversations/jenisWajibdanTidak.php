<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class jenisWajibdanTidak extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $question = Question::create('Pilih jenis vaksinasi :')
            ->addButtons([
                Button::create('Vaksinasi BCG')->value('<b>Vaksinasi BCG</b><br>Vaksinasi digunakan untuk pencegahan terhadap penyakit Tuberkulosis. Diberikan 1x pada bayi usia mulai 1 bulan sampai 1 tahun.'),
                Button::create('Vaksinasi Rubella')->value('<b>Vaksinasi Rubella</b><br>Vaksin digunakan untuk pencegahan terhadap penyakit campak dan rubella. Diberikan pada bayi mulai usia 9 bulan.'),
                Button::create('Vaksinasi DTP')->value('<b>Vaksinasi DTP</b><br>Vaksinasi digunakan untuk pencegahan terhadap difteri, tetanus, pertusis, hepatitis B, dan infeksi Haemophilus influenza tipe b. Diberikan 3x untuk usia 2, 3, & 4 bulan diberikan lagi pada usia 18 bulan untuk dosis booster.'),
                Button::create('Vaksinasi Hepatitis B')->value('<b>Vaksinasi Hepatitis B</b><br>Vaksinasi untuk mencegah penyakit yang disebabkan oleh virus Hepatitis B. Diindikasikan untuk imunisasi aktif pada semua usia, diberikan sebanyak 3x.'),
                Button::create('Vaksinasi Varicella')->value('Vaksinasi digunakan untuk pencegahan penyakit varicella. Diberikan untuk kepada umur 12 bulan ke atas, sebnayak 1x. Untuk umur 1 tahun - 12 tahun, jika diberikan dosis ke dua, harus terdapt jeda minimal 3 bulan. Untuk anak 13 tahun ke atas dan dewasa harus diberikan 2 dosis dengan interval 4 minggu.'),





            ]);

       $this->ask($question, function($answer){
            if ($answer->isInteractiveMessageReply()) {
                $this->say($answer->getValue());
            } else {
                $this->repeat();
            }
        });
    }
}
