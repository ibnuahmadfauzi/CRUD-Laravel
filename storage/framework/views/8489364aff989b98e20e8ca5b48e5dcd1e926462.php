<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <header>
            <h1 class="text-center">My Blog</h1>
        </header>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blogs">Blog</a>
                </li>
            </ul>
            <hr>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Author</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Ibnu Ahmad Fauzi</h6>
                            <p class="card-text">Selamat datang di halaman web Ibnu Ahmad Fauzi.</p>
                            <a href="#" class="btn btn-success">Tentang Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr>
            <p class="text-center">&copy; 2022 - Ibnu Ahmad Fauzi</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\ibnufauzi\Documents\Modul\example-app\resources\views/main.blade.php ENDPATH**/ ?>