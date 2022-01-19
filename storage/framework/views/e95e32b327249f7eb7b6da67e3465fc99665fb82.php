

<?php $__env->startSection('content'); ?>
    <h3 class="text-center mt-4 mb-4">
        Buat Postingan Baru
    </h3>
    <hr>
    <form action="/admin" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <table class="table table-borderless">
                    <tr>
                        <td>
                            <b>Judul</b>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="title" name="title" placeholder="judul postingan">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Penulis</b>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="author" name="author" placeholder="nama penulis">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Kategori</b>
                        </td>
                        <td>
                            <select name="category" class="form-control" id="category">
                                <option value="pilih">Pilih Kategori</option>
                                <option value="blog">Blog</option>
                                <option value="berita">Berita</option>
                                <option value="sastra">Sastra</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Artikel</b>
                        </td>
                        <td>
                            <textarea class="form-control" placeholder="tulis artikel disini" id="content" style="height: 500px" name="content"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button type="submit" class="btn btn-success">Kirim</button>
                            <a href="/admin" class="btn btn-warning">Kembali</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/admin/mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ibnufauzi\Documents\Modul\example-app\resources\views//admin/create.blade.php ENDPATH**/ ?>