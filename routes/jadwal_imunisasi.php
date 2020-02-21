<?php 
	use App\Http\Controllers\BotManController;
	use BotMan\BotMan\Messages\Attachments\Image;
	use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


	$botman = resolve('botman');

	$botman->hears('(.*)jadwal(.*)imunisasi(.*)|3', function ($bot) {
    $bot->reply('Ketik kata kunci dibawah ini untuk informasi lebih lengkap : <br>
    	*) <b>Jadwal Anak</b> <br>
    	*) <b>Jadwal Dewasa<b> <br>
        *) <b>Imunisasi wajib</b> <br>
        *) <b>Imunisasi tidak wajib</b> <br>
    	' );
	});

	$botman->hears('(.*)Jadwal Anak(.*)', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://akami.web.id/anak.jpg')->title('anak');
    $message = OutgoingMessage::create('<b>INFORMASI JADWAL ANAK</b>')->withAttachment($image);
    $bot->reply($message);

	});

	$botman->hears('(.*)Jadwal Dewasa(.*)', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://akami.web.id/dewasa.jpg')->title('anak');
    $message = OutgoingMessage::create('<b>INFORMASI JADWAL DEWASA</b>')->withAttachment($image);
    $bot->reply($message);

	});

?>