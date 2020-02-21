<?php 

$botman->hears('(.*)kontak(.*)|5', function ($bot) {
    $bot->reply('kamu dapat menghubungi nomor berikut 082121511511 untuk pertanyaan lebih lanjut seputar imunicare biofarma');
});

?>