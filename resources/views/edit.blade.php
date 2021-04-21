<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
 
	<h3 class="text-center text-dark">Edit Surat Masuk</h3>
 
	<a href="/pegawai" class="btn btn-warning"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($surat as $s)
	<form action="/surat/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->id }}"> <br/>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nomor Surat</label>
			<input type="text" name="nomor" required="required" class="form-control" id="exampleFormControlInput1" value="{{ $s->nomor }}" placeholder="Masukkan Nomor Surat">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Tanggal Surat</label>
			<input type="date" name="tanggal" required="required" class="form-control" id="exampleFormControlInput1" value="{{ $s->tanggal }}" placeholder="Pilih Tanggal Surat">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Pengirim Surat</label>
			<input type="text" name="pengirim" required="required" class="form-control" id="exampleFormControlInput1"  value="{{ $s->pengirim }}" >
		</div>
	
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
</div>
</body>
</html>