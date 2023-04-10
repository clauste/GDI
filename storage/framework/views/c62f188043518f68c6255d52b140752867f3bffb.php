
<?php $__env->startSection('title'); ?>
    Picture List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/js/datatables/jquery.dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h4 class="card-title">Picture</h4>
                </div>
            </div>
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <div class="card-header d-flex justify-content-end">
                        <a href="<?php echo e(route('picture.create')); ?>">
                            <button type="button" class="btn btn-dark">Add</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 15%;">Name</th>
                                    <th style="width: 20%;">Owner</th>
                                    <th style="width: 20%;">Tag</th>
                                    <th style="width: 30%;">Pic</th>
                                    <th class="text-center" style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 0; ?>
                                <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $index += 1; ?></td>
                                    <td><?php echo e($img->name); ?></td>
                                    <td><?php echo e($img->owner); ?></td>
                                    <td><?php echo e($img->tag); ?></td>
                                    <td><img src="<?php echo e(asset('assets/picture/' . $img->image)); ?>" alt="" style="object-fit: fill; width: 100%; max-height: 400px"></td>
                                    <td class="text-center">
                                        <a class="btn" href="<?php echo e(route('picture.edit', $img)); ?>">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn" href="<?php echo e(route('picture.destroy', $img)); ?>">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo asset('public/js/datatables/jquery.dataTables.min.js'); ?>"></script>

<script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Code\xampp\htdocs\clauste\GDI\resources\views/backend/picture/index.blade.php ENDPATH**/ ?>