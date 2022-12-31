<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Klub Bola</title>
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
<div class="pull-left">
<h2 style="color:white">Edit Club Bola</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('bolas.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('bolas.update',$bola->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong style="color:white">Nama Club Bola:</strong>
<input type="text" name="nama" value="{{ $bola->nama }}" class="form-control" placeholder="Nama Club Bola">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong style="color:white">Email Club Bola:</strong>
<input type="email" name="email" class="form-control" placeholder="Email Club Bola" value="{{ $bola->email }}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong style="color:white">Alamat Club Bola:</strong>
<input type="text" name="kota" value="{{ $bola->kota }}" class="form-control" placeholder="Alamat Club Bola">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong style="color:white">Stadion Club Bola:</strong>
    <input type="text" name="stadion" value="{{ $bola->stadion }}" class="form-control" placeholder="Stadion Club Bola">
    @error('owner')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong style="color:white">Maskot Club Bola:</strong>
    <input type="text" name="maskot" value="{{ $bola->maskot }}" class="form-control" placeholder="Maskot Club Bola">
    @error('product')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>