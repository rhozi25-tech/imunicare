<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm" style="padding-top: 20px; padding-bottom: 20px;">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="http://imunicare.biofarma.co.id/images/logo-main-alt.png" alt="logo" style="width:200px; margin-left: 50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Tentang Kami</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Layanan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Kontak</a>
    </li>
  </ul>

</nav>

<div id="example1">
  <h1>LAYANAN IMUNICARE</h1>
</div>
@yield('content')


<script src='/js/widget.js'></script>
</body>
</html>
