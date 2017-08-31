<?php $__env->startSection('title'); ?>
    Danh Sách Ảnh
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Danh Sách Ảnh
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    Ảnh
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">


                <div class="table-responsive">
                    <table class="table color-table info-table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Link</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td><img width="500px" src="<?php echo e(url('public/image/' . $l['basename'])); ?>"></td>
                                <td><?php echo e(url('public/image/' . $l['basename'])); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>