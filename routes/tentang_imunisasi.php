<?php 
	use App\Http\Controllers\BotManController;
	use BotMan\BotMan\Messages\Attachments\Image;
	use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


	$botman = resolve('botman');

	$botman->hears('(.*)tentang(.*)imunisasi(.*)|(.*)informasi(.*)imunisasi(.*)|1|imunisasi imunicare(.*)', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/Originals/Imunicare02.png')->title('imunisasi');
    $message = OutgoingMessage::create('<b>Imunisasi</b> adalah proses untuk membuat seseorang imun atau kebal terhadap suatu penyakit. Proses ini dilakukan dengan pemberian vaksin yang merangsang sistem kekebalan tubuh agar kebal terhadap penyakit tersebut.')->withAttachment($image);
    $bot->reply($message);

	});

?>