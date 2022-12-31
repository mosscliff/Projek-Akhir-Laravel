<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Resto</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<style>
    body {
      background-image: url('https://assets.bonappetit.com/photos/610aa6ddc50e2f9f7c42f7f8/master/pass/Savage-2019-top-50-busy-restaurant.jpg');
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
<h2>Tabel Restoran</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('restos.create') }}"> Create resto</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr style="background-color:#ffffff">
<th>S.No</th>
<th>Resto Name</th>
<th>Resto Email</th>
<th>Resto Address</th>
<th>Foods</th>
<th>Drinks</th>
<th width="280px">Action</th>
</tr>
@foreach ($restos as $resto)
<tr style="background-color:#ffffff">
<td>{{ $resto->id }}</td>
<td>{{ $resto->nama }}</td>
<td>{{ $resto->email }}</td>
<td>{{ $resto->alamat }}</td>
<td>{{ $resto->makanan }}</td>
<td>{{ $resto->minuman }}</td>
<td>
<form action="{{ route('restos.destroy',$resto->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('restos.edit',$resto->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $restos->links() !!}
</body>
</html>