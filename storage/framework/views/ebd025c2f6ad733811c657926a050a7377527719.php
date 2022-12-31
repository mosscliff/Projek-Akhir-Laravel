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
<a class="btn btn-success" href="<?php echo e(route('restos.create')); ?>"> Create resto</a>
</div>
</div>
</div>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
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
<?php $__currentLoopData = $restos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="background-color:#ffffff">
<td><?php echo e($resto->id); ?></td>
<td><?php echo e($resto->nama); ?></td>
<td><?php echo e($resto->email); ?></td>
<td><?php echo e($resto->alamat); ?></td>
<td><?php echo e($resto->makanan); ?></td>
<td><?php echo e($resto->minuman); ?></td>
<td>
<form action="<?php echo e(route('restos.destroy',$resto->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('restos.edit',$resto->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $restos->links(); ?>

</body>
</html><?php /**PATH D:\cobaauth\resources\views/restos/index.blade.php ENDPATH**/ ?>