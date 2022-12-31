<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Halaman Klub Bola</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2></h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('bolas.create') }}"> Create Company</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Nama Club Bola</th>
<th>Email Club Bola</th>
<th>Kota Club Bola</th>
<th>Stadion Club Bola</th>
<th>Maskot Club Bola</th>
<th width="280px">Action</th>
</tr>
@foreach ($bolas as $bola)
<tr>
<td>{{ $bola->id }}</td>
<td>{{ $bola->nama }}</td>
<td>{{ $bola->email }}</td>
<td>{{ $bola->kota }}</td>
<td>{{ $bola->stadion }}</td>
<td>{{ $bola->maskot }}</td>
<td>
<form action="{{ route('bolas.destroy',$bola->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('bolas.edit',$bola->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $bolas->links() !!}
</body>
</html>