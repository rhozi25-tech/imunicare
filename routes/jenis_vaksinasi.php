<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


$botman = resolve('botman');

$botman->hears('vaksinasi', function ($bot) {
    $bot->reply('Ketik nama vaksinasi untuk informasi lebih lengkap : <br><br><b>
    	1. Vaksinasi BCG <br>
    	2. Vaksinasi bOPV <br>
    	3. Vaksinasi Rubella <br>
    	4. Vaksinasi Demam Thypoid <br>
    	5. Vaksinasi DT <br>
    	6. Vaksinasi DTP <br>
    	7. Vaksinasi Hepatitis B <br>
    	8. Vaksinasi Influenza <br>
    	9. Vaksinasi Kanker Cervix <br>
    	10. Vaksinasi Kanker Pneumonia <br>
    	11. Vaksinasi Rabies <br>
    	12. Vaksinasi Rotavirus <br>
    	13. Vaksinasi Varicella <br></b>
    	');
});

$botman->hears('Vaksinasi BCG', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/BCG.png')->title('bcg');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk pencegahan terhadap penyakit Tuberkulosis. Diberikan 1x pada bayi usia mulai 1 bulan sampai 1 tahun.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi bOPV', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/bopv.png')->title('bopv');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk pencegahan terhadap penyakit Poliomyelitis. Diberikan sebanyak 4x untuk usia 0, 2, 3, dan 4 bulan.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi Rubella', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Campak.png')->title('campak');
    $message = OutgoingMessage::create('Vaksin digunakan untuk pencegahan terhadap penyakit campak dan rubella. Diberikan pada bayi mulai usia 9 bulan.')->withAttachment($image);
    $bot->reply($message);

});


$botman->hears('Vaksinasi Demam Thypoid', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Typhoid.png')->title('thypoid');
    $message = OutgoingMessage::create('Vaksinasi yang digunakan untuk pencegahan demam thypoid. Diberikan sebanyak 1x pada anak di atas usia 2 tahun dan pada orang dewasa. Vaksinasi ulang dilakukan tiap 3 tahun sekali.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi DT', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Td.png')->title('dt');
    $message = OutgoingMessage::create('Vaksinasi DT & Vaksinasi Td digunakan untuk pencegahan terhadap penyakit difteri dan tetanus. Vaksinasi TT digunakan untuk pencegahan terhadap tetanus. Vaksin DT digunakan untuk imunisasi anak-anak usia di bawah 7 tahun. Vaksin Td direkomendasikan pemberian 1 dosis, sebagai booster pada usia mulai dari 7 tahun. Vaksin TT diberikan sebanyak 2 dosis primer dengan interval 4-6 minggu, diikuti dosis ke tiga 6 bulan berikutnya.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi DTP', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Pentabio.png')->title('dtp');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk pencegahan terhadap difteri, tetanus, pertusis, hepatitis B, dan infeksi Haemophilus influenza tipe b. Diberikan 3x untuk usia 2, 3, & 4 bulan diberikan lagi pada usia 18 bulan untuk dosis booster.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi Hepatitis B', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/HepatitisB.png')->title('hepatitis');
    $message = OutgoingMessage::create('Vaksinasi untuk mencegah penyakit yang disebabkan oleh virus Hepatitis B. Diindikasikan untuk imunisasi aktif pada semua usia, diberikan sebanyak 3x.')->withAttachment($image);
    $bot->reply($message);

});


$botman->hears('Vaksinasi Influenza', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Influenza.png')->title('influenza');
    $message = OutgoingMessage::create('Vaksinasi direkomendasikan untuk pencegahan terhadap penyakit oleh virus influenza. Diberikan kepada orang sehat mulai usia 6 bulan ke atas. Vaksin direkomendasikan sekali dalam setahun.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi Kanker Cervix', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/KankerServik.png')->title('kanker');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk mencegah kanker dan pra kanker serviks, vulva, vagina dan anus. Mencegah infeksi yang disebabkan HPV-6, HPV-11, HPV-16, dan HPV-18. Pencegahan lesi genital eksternal termasuk kutil kelamin. Vaksinasi diberikan pada wanita maupun pria pada rentang usia 9-26 tahun.')->withAttachment($image);
    $bot->reply($message);

});


$botman->hears('Vaksinasi Pneumonia', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Pneumonia.png')->title('pneumonia');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk Imunisasi aktif untuk pencegahan penyakit pneumokokal (termasuk pneumonia, otitis media, & penyakit invasif). "Diberikan sebanyak 4x untuk bayi usia 6 minggu - 6 bulan. Diberikan sebanyak 3x pada bayi umur 7-11 bulan. Pada bayi usi 12-23 bulan diberikan 2x. Pada anak usia 2-5 tahun diberikan sebanyak 1 dosis tunggal. Untuk dewasa dengan usia lebih dari 50 tahun diberikan 1 dosis tunggal.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi Rabies', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Rabies.png')->title('rabies');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk pencegahan dan penanganan penyakit rabies sebelum dan sesuadah terpapar. "Diberikan sebanyak 3x untuk tahap pre exposure prophylaxis atau pencegahan pada orang dengan risiko tinggi, booster 1 tahun berikutnya dan selanjutnya tiap 5 tahun. Diberikan sebanyak 5x untuk tahap post exposure prophylaxis ataupengobatan pada orang yang tergigit hewan rabies tanpa pernah mendapatkan vaksin rabies lengkap sebelumnya atau booster lebih dari 5 tahun. Sedangkan untuk orang yang mendaptkan vaksin rabies lengkap dan booster kurang dari 5 tahun cukup diberikan 2x.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi Rotavirus', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Rotavirus.png')->title('Rotavirus');
    $message = OutgoingMessage::create('Vaksinasi Rotavirus digunakan untuk melindungi bayi dan anak-anak dari penyakit gastroenteritis (radang pada lambung dan usus). Diberikan pada bayi umur mulai dari 6 minggu.')->withAttachment($image);
    $bot->reply($message);

});

$botman->hears('Vaksinasi Varicella', function ($bot) {
	$bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/products/Varicella.png')->title('varicella');
    $message = OutgoingMessage::create('Vaksinasi digunakan untuk pencegahan penyakit varicella. Diberikan untuk kepada umur 12 bulan ke atas, sebnayak 1x. Untuk umur 1 tahun - 12 tahun, jika diberikan dosis ke dua, harus terdapt jeda minimal 3 bulan. Untuk anak 13 tahun ke atas dan dewasa harus diberikan 2 dosis dengan interval 4 minggu.')->withAttachment($image);
    $bot->reply($message);

});


