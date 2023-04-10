
<?php $__env->startSection('title'); ?>
    Add Picture
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form method="post" action="<?php echo e(!request()->routeIs('picture.edit') ? route('picture.store') : route('picture.update', $imageItem)); ?>" novalidate enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="box-title"><?php echo e(!request()->routeIs('picture.edit') ? 'Add' : 'Edit'); ?> Picture</h2>
                                            </div>
                                            <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary col-md-2" style="float: right; margin-top: 10px;" id="publish">Publish</button>
                                            </div>
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
                                    <div class="box-body">
                                        <?php if(!request()->routeIs('picture.edit')): ?>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Input Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Tag</label>
                                            <input type="text" id="tag" name="tag" class="form-control" placeholder="Input tag">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea type="text" id="description" name="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group btn btn-secondary">
                                            <label for="image"><strong>upload image</strong></label>
                                        </div>
                                        <div class="form-group">
                                            <img id="imagePreview2" src="#" class="wow fadeIn" style="display: none; object-fit: fit; width: 100%;">
                                            <input type="file" name="image" id="image" class="form-control" required">
                                        </div>
                                        <?php else: ?>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Input Name" value="<?php echo e($imageItem->name); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Tag</label>
                                                <input type="text" id="tag" name="tag" class="form-control" placeholder="Input tag">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea type="text" id="description" name="description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group btn btn-secondary">
                                                <label for="image"><strong>upload image</strong></label>
                                            </div>
                                            <div class="form-group">
                                            <img id="imagePreview2" src="<?php echo e(asset('assets/picture/' . $imageItem->image)); ?>" class="wow fadeIn" style="object-fit: fill; width: 100%; max-height: 400px">
                                                <input type="file" name="image" id="image" class="form-control" required">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>


<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script>
    function imagePreview2(input){
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview2').css('display', '');
                $('#imagePreview2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#image').change(function () {
        imagePreview2(this);
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
    $(document).ready(function(){
        
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Code\xampp\htdocs\clauste\GDI\resources\views/backend/picture/create.blade.php ENDPATH**/ ?>