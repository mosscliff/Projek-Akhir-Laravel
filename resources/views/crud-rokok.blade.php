<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Company</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
  body {
    background-image: url('https://wallpaperaccess.com/full/1137443.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  </style>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Tabel Company
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-rokok')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Company Name</label>
          <input type="text" id="Ikan" name="Ikan" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Company Email</label>
            <input type="text" id="Mamalia" name="Mamalia" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Address</label>
            <input type="text" id="Reptil" name="Reptil" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Owner</label>
            <input type="text" id="Unggas" name="Unggas" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Product</label>
            <input type="text" id="Amfibi" name="Amfibi" class="form-control" required="">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>