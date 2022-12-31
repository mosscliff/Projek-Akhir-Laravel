<!DOCTYPE html>
<html>
<head>
    <title>Rambah Data Kendaraan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Rambah Data Kendaraan
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Resto Name</label>
          <input type="text" id="Motor" name="Motor" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Resto Email</label>
            <input type="text" id="Mobil" name="Mobil" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Resto Address</label>
            <input type="text" id="Pesawat" name="Pesawat" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Foods</label>
            <input type="text" id="Sepeda" name="Sepeda" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Drinks</label>
            <input type="text" id="Umum" name="Umum" class="form-control" required="">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>