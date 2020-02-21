<?php 	

$botman->hears('(.*)Jenis Vaksinasi|4', function ($bot){
	$bot->startConversation(new App\Conversations\JenisVaksinasi);
    
});

$botman->hears('(.*)imunisasi wajib', function ($bot){
	$bot->startConversation(new App\Conversations\jenisWajibdanTidak);
    
});

$botman->hears('(.*)imunisasi tidak wajib', function ($bot){
	$bot->startConversation(new App\Conversations\JenisTidakWajib);
    
});

$botman->fallback(function($bot){
	$message = $bot->getMessage();
	$bot->reply('maaf kami tidak mengerti maksud anda : "'.$message->getText().'"');
	$bot->reply('assalamualaikum sobat imunicare, ada yang bisa kami bantu ? cobalah mengetikan kata kunci seperti berikut<br> <b>1. tentang imunisasi <br>2. tentang imunicare <br>3. jadwal imunisasi <br>4. jenis vaksinasi <br>5. kontak </b>');
});


$botman->hears('hai|hi|hello|hallo|halo', function($bot){
	$bot->reply('hi');
	$bot->ask('siapa nama kamu ?', function($answer, $conversation ){
		$value = $answer->getText();
		$conversation ->say('senang berkenalan denganmu, '.$value.'<br>ada yang bisa saya bantu ?');
	});
});

$botman->hears('assalamualaikum|mikum', function($bot){
	$bot->reply('waalaikumsalam wr.wb');
	$bot->ask('mari berkenalan terlebih dahulu ya, siapa nama kamu ?', function($answer, $conversation ){
		$value = $answer->getText();
		$conversation ->say('senang berkenalan denganmu, '.$value.'<br>ada yang bisa saya bantu ?');
	});
});

 ?>