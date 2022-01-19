

<?php $__env->startSection('content'); ?>
    
    <h3 class="text-center mt-3 mb-3">
        List Postingan
    </h3>
    <hr>
    <p class="text-center">
        <a href="/admin/create" class="btn btn-success">Buat Postingan Baru</a>
    </p>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Judul</th>
            <th class="text-center">Penulis</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Alat</th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($post['title']); ?>

                </td>
                <td>
                    <?php echo e($post['author']); ?>

                </td>
                <td>
                    <?php echo e($post['category']); ?>

                </td>
                <td class="text-center">
                    <a href="/blogs/<?php echo e($post['slug']); ?>" class="btn btn-primary">Baca</a>
                    <a href="/admin/edit/<?php echo e($post['id']); ?>" class="btn btn-warning">Edit</a>
                    <form action="/admin/destroy/<?php echo e($post['id']); ?>" method="POST" class="d-inline">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="4">
                <div class="d-flex justify-content-center">
                    <?php echo e($posts->links('pagination::bootstrap-4')); ?>

                </div>
            </td>
        </tr>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/admin/mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ibnufauzi\Documents\Modul\example-app\resources\views//admin/index.blade.php ENDPATH**/ ?>