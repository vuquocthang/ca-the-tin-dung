<?php $__env->startSection('meta_description'); ?>
    @parent
<?php $__env->stopSection(); ?>

<?php $__env->startSection('slider'); ?>
    @parent
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class='tpl-blog-holder'>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="column dt-sc-one-column">
            <article id="post-7786" class="blog-entry entry-classic post-7786 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-asia tag-nature">
                <!-- Entry Meta Data -->
                <div class="entry-meta-data">
                    <div class="entry-title">
                        <h4><a href="" title=""><?php echo e($post['title']); ?></a></h4>
                    </div>
                    <!-- Entry Meta Data -->



                    <!-- Featured Image -->

                    <div class="entry-details">
                        <div class="entry-body">
                            <?php echo htmlspecialchars_decode($post['body']) ?>
                        </div>




                    </div>

                </div>
                <!-- Entry Meta Data -->
            </article>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>