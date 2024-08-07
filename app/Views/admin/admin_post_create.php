<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gizila Web-App</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="container navbar navbar-expand-md navbar-dark fixed-top bg-success shadow">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>"><img src="img/navlogo-gizila.png" alt="logo"
                    height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('logout') ?>" class="btn btn-danger mr-3">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container p-5 mb-4 bg-success rounded-3 jumbotron jumbotron-fluid">
        <div class="container py-5">
            <h1 class="display-10 text-white">Dashboard Admin, Solusi Pintar</h1>
            <p class="lead text-white">Hai! Kelola data Anda dengan mudah dan cepat. Pantau konten, lihat laporan, dan
                nikmati
                kemudahan dalam setiap klik. Jelajahi dashboard kami dan rasakan perbedaannya!</p>
        </div>
    </div>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="image">
            </div>

            <div class="form-group mb-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Post title" required>
            </div>
            <div class="form-group mb-2">
                <textarea name="content" class="form-control" cols="30" rows="10"
                    placeholder="Write a great post!"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                <button type="submit" name="status" value="draft" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>

    <div class="container py-4 ">
        <footer class="text-center bg-primary text-white rounded-3">
            <!-- Copyright -->
            <div class="text-center p-3 bg-success rounded-3">
                <span class="mb-3 mb-md-0 text-white">© 2024 Copyright by <a class="text-white"
                        href="https://github.com/alfaaannz?tab=repositories">Muhamad Alfan Alfajri</a></span>
            </div>
            <!-- Copyright -->
        </footer>
    </div>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>