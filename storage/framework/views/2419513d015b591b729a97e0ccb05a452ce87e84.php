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
<a class="btn btn-success" href="<?php echo e(route('bands.create')); ?>"> Create Company</a>
</div>
</div>
</div>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
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
<?php $__currentLoopData = $bands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $band): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($band->id); ?></td>
<td><?php echo e($band->vokalis); ?></td>
<td><?php echo e($band->email); ?></td>
<td><?php echo e($band->basis); ?></td>
<td><?php echo e($band->drumer); ?></td>
<td><?php echo e($band->pianis); ?></td>
<td>
<form action="<?php echo e(route('bands.destroy',$band->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('bands.edit',$band->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $bands->links(); ?>

</body>
</html><?php /**PATH D:\cobaauth\resources\views/bands/index.blade.php ENDPATH**/ ?>