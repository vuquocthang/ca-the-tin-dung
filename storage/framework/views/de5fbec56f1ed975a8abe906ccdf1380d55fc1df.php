<?php $__env->startSection('title'); ?>
    Trang Chủ
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-title'); ?>
    @parent
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    @parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="white-box">
                <h3 class="box-title m-b-0">SEO Onpage</h3>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="<?php echo e(url('admin/seo')); ?>" method="post">

                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description</label>
                                <input type="text" name="meta_description" value="<?php echo e($seo['meta_description']); ?>" class="form-control" id="exampleInputEmail1" placeholder="Description" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Keyword</label>
                                <input type="text" name="meta_keyword" value="<?php echo e($seo['meta_keyword']); ?>" class="form-control" id="exampleInputEmail1" placeholder="Keyword" required>
                            </div>


                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3"></div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>