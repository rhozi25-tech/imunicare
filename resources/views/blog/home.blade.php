@extends('layouts.master')

@section('title', 'Botman Imunicare')

@section('content')

<div class="container" style="margin-top: 20px">
	<div class="row">
      <div class="col-sm-6"><img src="http://imunicare.biofarma.co.id/images/Originals/Imunicare01.png" width="100%" height="100%" style="border-radius: 20px"></div>
      <div class="col-sm-6">
      	<p>Tentang Imunicare</p>
      	<h2>Selamat Datang di Imunicare</h2>
      	<p style="text-align: justify;">Kini telah hadir Imunicare di tengah-tengah kita sebagai salah satu solusi untuk mendapatkan imunity ( kekebalan tubuh). Imunicare merupakan bagian dari Klinik Pratama Bio Farma yang memberikan pelayanan kesehatan terpercaya melalui pelayanan vaksinasi. Imunicare hadir dengan petugas yang expert, kualitas produk tinggi, jaminan kualitas layanan dan memberikan edukasi konsumen yang informatif sehingga akan memberikan rasa tenang bagi kita semua.</p>
      	<?php 
      		$bilangan = 11;

      		if ($bilangan % 2 == 0) {
      			echo "bilangan genap";
      		} else {
      			echo "bilangan ganjil";
      		}

      	?>
      </div>
    </div>
    <br>
	</div>	
</div>

@endsection
