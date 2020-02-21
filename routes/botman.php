<?php
use App\Http\Controllers\BotManController;
use App\Tbl_keyword;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


  $botman = resolve('botman');

include('tentang_imunicare.php');
include('tentang_imunisasi.php');
include('kontak.php');
include('jenis_vaksinasi.php');
include('jadwal_imunisasi.php');
include('lainnya.php');



$botman->hears('data keyword', function ($bot){
	$todos = Tbl_keyword::all();

	if (count($todos) > 0 ) {
		$bot->reply('<b>data keyword kamu : </b>');
		foreach ($todos as $todo) {
			$bot->reply($todo->id.' - '.$todo->jawaban);
		}		
	} else {
		$bot->reply('Tidak ada data keyword');
	}

}); 

$botman->hears('tambah data', function ($bot){
	$bot->ask('masukkan data keyword ?', function ($key, $conversation){
		Tbl_keyword::create([
			'keyword' => $key
		]);

		$conversation->say('Kamu telah menambahkan "'.$key."'");
	});
});

$botman->hears('finish todo {id}', function ($bot, $id){
	$todo = Tbl_keyword::find($id);

	if (is_null($todo)) {
		$bot->reply('maaf, kami tidak dapat menemukan id "'.$id."'");
	} else {
		$todo->completed = true;
		$todo->save();

		$bot->reply('yeaa, akhirnya ketemu "'.$todo->jawaban."'");	
	}
});

$botman->hears('delete todo {id}', function($bot, $id){
	$todo = Tbl_keyword::find($id);

	if (is_null($todo)) {
		$bot->reply('maaf, kami tidak dapat menemukan id "'.$id."'");
	} else {
		$todo->delete();
		$bot->reply('kamu berhasil menghapus id "'.$todo->keyword."'");
	}
});