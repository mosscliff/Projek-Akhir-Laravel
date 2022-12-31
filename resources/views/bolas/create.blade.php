<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Halaman Tambah Club Bola</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<style>
    body {
      background-image: url('https://wallpaperaccess.com/full/1952506.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2 style="background-color:#ffffff">Tambahkan Club Bola</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('bolas.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('bolas.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong style="background-color:#ffffff">Nama Klub Bola:</strong>
<input type="text" name="nama" class="form-control" placeholder="Nama Klub Bola">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong style="background-color:#ffffff">Email Club Bola:</strong>
<input type="email" name="email" class="form-control" placeholder="Email Club Bola">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong style="background-color:#ffffff">Alamat Club Bola:</strong>
<input type="text" name="kota" class="form-control" placeholder="Alamat Club Bola">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong style="background-color:#ffffff">Nama Stadion Bola:</strong>
    <input type="text" name="stadion" class="form-control" placeholder="Nama Stadion Bola">
    @error('owner')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong style="background-color:#ffffff">Maskot Klub Bola:</strong>
        <input type="text" name="maskot" class="form-control" placeholder="Maskot Klub Bola">
        @error('product')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>