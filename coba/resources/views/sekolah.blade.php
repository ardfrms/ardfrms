<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sekolah</title>
</head>
<body>
	<center>
		<h1>Sekolah</h1>

	<p><strong>Sekolah</strong></p>
	<ol>
		<li>nama_sekolah : {{ $nama_sekolah }}</li>
		<li>alamat_sekolah : {{ $alamat_sekolah }}</li>
		<li>murid_sekolah : <a href="{{ url('/magang')}}">{{ $murid_sekolah1 }}</a></li>
		<li>murid_sekolah : <a href="{{ url('/ardo')}}">{{ $murid_sekolah2 }}</a></li>
	</ol>
	</center>


</body>
</html>