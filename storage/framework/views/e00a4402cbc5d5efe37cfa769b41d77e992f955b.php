<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Halaman Klub Bola</title>
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
<h2></h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('bolas.create')); ?>"> Create Company</a>
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
<th>Nama Club Bola</th>
<th>Email Club Bola</th>
<th>Kota Club Bola</th>
<th>Stadion Club Bola</th>
<th>Maskot Club Bola</th>
<th width="280px">Action</th>
</tr>
<?php $__currentLoopData = $bolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bola): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="background-color:#ffffff">
<td><?php echo e($bola->id); ?></td>
<td><?php echo e($bola->nama); ?></td>
<td><?php echo e($bola->email); ?></td>
<td><?php echo e($bola->kota); ?></td>
<td><?php echo e($bola->stadion); ?></td>
<td><?php echo e($bola->maskot); ?></td>
<td>
<form action="<?php echo e(route('bolas.destroy',$bola->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('bolas.edit',$bola->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $bolas->links(); ?>

</body>
</html><?php /**PATH D:\cobaauth\resources\views/bolas/index.blade.php ENDPATH**/ ?>