

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($post['slug'] == $slug): ?>
            <h3><?php echo e($post['title']); ?></h3>
            <br>
            <p>By: <?php echo e($post['author']); ?></p>
            <hr>
            <p style="text-align: justify;">
                <?php echo e($post['content']); ?>

            </p>
            <hr>
            <p>
                Kategori: <?php echo e($post['category']); ?>

            </p>
            <br>
            <br>
                <p class="text-center">
                    <a href="/blogs" class="btn btn-warning">Semua Postingan</a>
                </p>
            <br>
            <br>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ibnufauzi\Documents\Modul\example-app\resources\views/post.blade.php ENDPATH**/ ?>