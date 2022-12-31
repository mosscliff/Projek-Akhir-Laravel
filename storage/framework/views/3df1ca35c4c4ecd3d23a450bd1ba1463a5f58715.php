<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Daftar Hewan
            </div>
            <div class="card-body">
                <table  class="table table-primary table-striped">
                    <tr class="table-primary">
                        <th>Ikan</th>
                        <th>Mamalia</th>
                        <th>Reptil</th>
                        <th>Unggas</th>
                        <th>Amfibi</th>
                        <th colspan=2>Action</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-dark" style="width: 10%">
                        <td class="table-info">
                            <?php echo e($isi -> Ikan); ?>

                        </td>
                        <td class="table-info" style="width: 20%">
                            <?php echo e($isi -> Mamalia); ?>

                        </td>
                        <td class="table-info" style="width: 5%">
                            <?php echo e($isi -> Reptil); ?>

                        </td>
                        <td class="table-info" style="width: 25%">
                            <?php echo e($isi -> Unggas); ?>

                        </td>
                        <td class="table-info" style="width: 10%">
                            <?php echo e($isi -> Amfibi); ?>

                        </td>
                        <td class="table-info" style="width: 5%">
                            <a href="<?php echo e(url('delete-hewan')); ?>/<?php echo e($isi->nim); ?>">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                        <td class="table-info" style="width: 5%">
                            <a href="<?php echo e(url('edit-hewan')); ?>/<?php echo e($isi->nim); ?>">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\cobaauth\resources\views/tabel-rokok.blade.php ENDPATH**/ ?>