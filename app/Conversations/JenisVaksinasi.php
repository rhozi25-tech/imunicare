<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class JenisVaksinasi extends Conversation
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
                Button::create('Vaksinasi bOPV')->value('<b>Vaksinasi bOPV</b><br>Vaksinasi digunakan untuk pencegahan terhadap penyakit Poliomyelitis. Diberikan sebanyak 4x untuk usia 0, 2, 3, dan 4 bulan.'),
                Button::create('Vaksinasi BCG')->value('<b>Vaksinasi BCG</b><br>Vaksinasi digunakan untuk pencegahan terhadap penyakit Tuberkulosis. Diberikan 1x pada bayi usia mulai 1 bulan sampai 1 tahun.'),
                Button::create('Vaksinasi Rubella')->value('<b>Vaksinasi Rubella</b><br>Vaksin digunakan untuk pencegahan terhadap penyakit campak dan rubella. Diberikan pada bayi mulai usia 9 bulan.'),
                Button::create('Vaksinasi Demam Thypoid')->value('<b>Vaksinasi Demam Thypoid</b><br>Vaksinasi yang digunakan untuk pencegahan demam thypoid. Diberikan sebanyak 1x pada anak di atas usia 2 tahun dan pada orang dewasa. Vaksinasi ulang dilakukan tiap 3 tahun sekali.'),
                Button::create('Vaksinasi DT')->value('<b>Vaksinasi DT</b><br>Vaksinasi DT & Vaksinasi Td digunakan untuk pencegahan terhadap penyakit difteri dan tetanus. Vaksinasi TT digunakan untuk pencegahan terhadap tetanus. Vaksin DT digunakan untuk imunisasi anak-anak usia di bawah 7 tahun. Vaksin Td direkomendasikan pemberian 1 dosis, sebagai booster pada usia mulai dari 7 tahun. Vaksin TT diberikan sebanyak 2 dosis primer dengan interval 4-6 minggu, diikuti dosis ke tiga 6 bulan berikutnya.'),
                Button::create('Vaksinasi DTP')->value('<b>Vaksinasi DTP</b><br>Vaksinasi digunakan untuk pencegahan terhadap difteri, tetanus, pertusis, hepatitis B, dan infeksi Haemophilus influenza tipe b. Diberikan 3x untuk usia 2, 3, & 4 bulan diberikan lagi pada usia 18 bulan untuk dosis booster.'),
                Button::create('Vaksinasi Hepatitis B')->value('<b>Vaksinasi Hepatitis B</b><br>Vaksinasi untuk mencegah penyakit yang disebabkan oleh virus Hepatitis B. Diindikasikan untuk imunisasi aktif pada semua usia, diberikan sebanyak 3x.'),
                Button::create('Vaksinasi Influenza')->value('<b>Vaksinasi Influenza</b><br>Vaksinasi direkomendasikan untuk pencegahan terhadap penyakit oleh virus influenza. Diberikan kepada orang sehat mulai usia 6 bulan ke atas. Vaksin direkomendasikan sekali dalam setahun.'),
                Button::create('Vaksinasi Kanker Cervix')->value('<b>Vaksinasi Kanker Cervix</b><br>Vaksinasi digunakan untuk mencegah kanker dan pra kanker serviks, vulva, vagina dan anus. Mencegah infeksi yang disebabkan HPV-6, HPV-11, HPV-16, dan HPV-18. Pencegahan lesi genital eksternal termasuk kutil kelamin. Vaksinasi diberikan pada wanita maupun pria pada rentang usia 9-26 tahun.'),
                Button::create('Vaksinasi Pneumonia')->value('<b>Vaksinasi Pneumonia</b><br>Vaksinasi digunakan untuk Imunisasi aktif untuk pencegahan penyakit pneumokokal (termasuk pneumonia, otitis media, & penyakit invasif). "Diberikan sebanyak 4x untuk bayi usia 6 minggu - 6 bulan. Diberikan sebanyak 3x pada bayi umur 7-11 bulan. Pada bayi usi 12-23 bulan diberikan 2x. Pada anak usia 2-5 tahun diberikan sebanyak 1 dosis tunggal. Untuk dewasa dengan usia lebih dari 50 tahun diberikan 1 dosis tunggal.'),
                Button::create('Vaksinasi Rabies')->value('<b>Vaksinasi Rabies</b><br>Vaksinasi digunakan untuk pencegahan dan penanganan penyakit rabies sebelum dan sesuadah terpapar. "Diberikan sebanyak 3x untuk tahap pre exposure prophylaxis atau pencegahan pada orang dengan risiko tinggi, booster 1 tahun berikutnya dan selanjutnya tiap 5 tahun. Diberikan sebanyak 5x untuk tahap post exposure prophylaxis ataupengobatan pada orang yang tergigit hewan rabies tanpa pernah mendapatkan vaksin rabies lengkap sebelumnya atau booster lebih dari 5 tahun. Sedangkan untuk orang yang mendaptkan vaksin rabies lengkap dan booster kurang dari 5 tahun cukup diberikan 2x.'),
                Button::create('Vaksinasi Rotavirus')->value('Vaksinasi Rotavirus digunakan untuk melindungi bayi dan anak-anak dari penyakit gastroenteritis (radang pada lambung dan usus). Diberikan pada bayi umur mulai dari 6 minggu.'),
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
