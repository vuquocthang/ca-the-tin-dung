<?php $__env->startSection('title'); ?>
    Upload Ảnh
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Upload Ảnh
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    Ảnh
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
            <div class="white-box">

                <form action="<?php echo e(url('admin/image/upload')); ?>" method="post" class="form-horizontal"  enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                    <label for="input-file-now">Your so fresh input file — Default version</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Upload</button>
                    </div>

                </form>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>