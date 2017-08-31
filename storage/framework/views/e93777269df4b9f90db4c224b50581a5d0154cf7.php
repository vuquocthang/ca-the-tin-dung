<?php $__env->startSection('title'); ?>
    Danh Sách Bài Đăng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Danh Sách Bài Đăng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    Bài Đăng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">


                <div class="table-responsive">
                    <table class="table color-table info-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tiêu Đề</th>
                            <th>Hành Động</th>
                            <th>Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td><?php echo e($post['id']); ?></td>
                            <td><?php echo e($post['title']); ?></td>
                            <td><a href="<?php echo e(url('admin/post/editForm/' . $post['id'])); ?>">Sửa</a></td>
                            <td><a href="<?php echo e(url('admin/post/del/' . $post['id'])); ?>">Xóa</a></td>
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