<?php 
	use App\Http\Controllers\BotManController;
	use BotMan\BotMan\Messages\Attachments\Image;
	use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


	$botman = resolve('botman');

	$botman->hears('(.*)informasi(.*)imunicare(.*)|(.*)tentang(.*)imunicare(.*)|2|imunicare imunisasi(.*)', function ($bot) {

    $bot->typesAndWaits(1);

    $image = Image::url('http://imunicare.biofarma.co.id/images/Originals/Imunicare01.png')->title('imunicare');
    $message = OutgoingMessage::create('<b>Imunicare</b> merupakan bagian dari Klinik Pratama Bio Farma yang memberikan pelayanan kesehatan terpercaya melalui pelayanan vaksinasi. Imunicare hadir dengan petugas yang expert, kualitas produk tinggi, jaminan kualitas layanan dan memberikan edukasi konsumen yang informatif sehingga akan memberikan rasa tenang bagi kita semua.')->withAttachment($image);
    $bot->reply($message);
	});

?>