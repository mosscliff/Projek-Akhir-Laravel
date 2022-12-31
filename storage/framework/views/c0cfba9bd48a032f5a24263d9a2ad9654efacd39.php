<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Company</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
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
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Tabel Company</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('companies.create')); ?>"> Create Company</a>
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
<th>Company Name</th>
<th>Company Email</th>
<th>Company Address</th>
<th>Company Owner</th>
<th>Company Product</th>
<th width="280px">Action</th>
</tr>
<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="background-color:#ffffff">
<td><?php echo e($company->id); ?></td>
<td><?php echo e($company->name); ?></td>
<td><?php echo e($company->email); ?></td>
<td><?php echo e($company->address); ?></td>
<td><?php echo e($company->owner); ?></td>
<td><?php echo e($company->product); ?></td>
<td>
<form action="<?php echo e(route('companies.destroy',$company->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('companies.edit',$company->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $companies->links(); ?>

</body>
</html><?php /**PATH D:\cobaauth\resources\views/companies/index.blade.php ENDPATH**/ ?>