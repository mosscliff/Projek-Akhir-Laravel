<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
  <?php endif; ?>
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="<?php echo e(url('store-form')); ?>">
       <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Sayur</label>
          <input type="text" id="Sayur" name="Sayur" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Bunga</label>
            <input type="text" id="Bunga" name="Bunga" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Pohon</label>
            <input type="text" id="Pohon" name="Pohon" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Buah</label>
            <input type="text" id="Buah" name="Buah" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jamur</label>
            <input type="text" id="Jamur" name="Jamur" class="form-control" required="">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html><?php /**PATH D:\cobaauth\resources\views/crud-tanaman.blade.php ENDPATH**/ ?>