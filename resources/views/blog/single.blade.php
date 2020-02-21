<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Selamat Datang di Blog</h1>
	<p>{{ $blog }}</p>

	@foreach($user as $users)
		{{ $users->kode_fakjur }}
	@endforeach
</body>
</html>