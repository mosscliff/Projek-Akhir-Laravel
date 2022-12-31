<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 9 CRUD Example Tutorial</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('bands.create') }}"> Create Company</a>
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
<th>Company vokalis</th>
<th>Company Email</th>
<th>Company Address</th>
<th>Company Owner</th>
<th>Company Product</th>
<th width="280px">Action</th>
</tr>
@foreach ($bands as $band)
<tr>
<td>{{ $band->id }}</td>
<td>{{ $band->vokalis }}</td>
<td>{{ $band->email }}</td>
<td>{{ $band->basis }}</td>
<td>{{ $band->drumer }}</td>
<td>{{ $band->pianis }}</td>
<td>
<form action="{{ route('bands.destroy',$band->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('bands.edit',$band->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $bands->links() !!}
</body>
</html>