<?php $__env->startSection('title'); ?>
    Sửa Bài Đăng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Sửa Bài Đăng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    Bài Đăng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">

                <form action="<?php echo e(url('admin/post/update/'. $id)); ?>" method="post" class="form-horizontal">

                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label class="col-md-12">Tiêu Đề </label>
                        <div class="col-md-12">
                            <input type="text" name="title" value="<?php echo e($post['title']); ?>" class="form-control" > </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Meta Description </label>
                        <div class="col-md-12">
                            <input type="text" id="example-email" value="<?php echo e($post['meta_description']); ?>" name="meta_description" class="form-control" > </div>
                    </div>

                    <div class="form-group">
                        <textarea id="mymce" name="body"><?php echo e($post['body']); ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cập Nhật</button>
                </form>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>