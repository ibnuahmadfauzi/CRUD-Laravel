

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <?php $__currentLoopData = $postChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6">
                    <div class="card mb-2" style="width: 100%;">
                        <img src="/images/gambar.jpg" class="card-img-top" alt="Gambar Postingan">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo e($post['title']); ?></h5>
                        <p><b>By: </b><?php echo e($post['author']); ?></p>
                        <p><b>Kategori: </b><?php echo e($post['category']); ?></p>
                        <a href="/blogs/<?php echo e($post['slug']); ?>" class="btn btn-primary">Baca Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    
    <div class="d-flex justify-content-center">
        <?php echo $posts->links('pagination::bootstrap-4'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ibnufauzi\Documents\Modul\example-app\resources\views/blogs.blade.php ENDPATH**/ ?>