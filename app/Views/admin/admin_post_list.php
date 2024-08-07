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
        <a class="navbar-brand" href="<?= base_url() ?>"><img src="img/navlogo-gizila.png" alt="logo" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Grafik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Galery</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/post/new') ?>" class="btn btn-light mr-3">New Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container p-5 mb-4 bg-success rounded-3 card text-center">
        <div class="card-header"></div>
        <div class="card-body pt-4">
            <h5 class="card-title text-white">Optimalkan Pengelolaan Data dengan Dashboard Admin Terbaru</h5>
            <p class="card-text text-white">Transformasi pengelolaan data Anda dengan teknologi canggih. Dapatkan
                analitik real-time, integrasi mulus, dan keamanan tinggi. Jadikan data lebih efisien dan efektif!</p>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Konten</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $post['id'] ?></td>
                        <td>
                            <?php if (isset($post['image'])): ?>
                                <img src="<?= base_url('uploads/' . $post['image']) ?>" alt="<?= $post['title'] ?>"
                                    class="img-thumbnail" style="width: 150px; height: auto;">
                            <?php else: ?>
                                <img src="<?= base_url('uploads/coming-soon.png') ?>" alt="Default Image"
                                    class="img-thumbnail" style="width: 150px; height: auto;">
                            <?php endif ?>
                        </td>

                        <td>
                            <strong><?= $post['title'] ?></strong><br>
                            <small class="text-muted"><?= $post['created_at'] ?></small>
                        </td>
                        <td>
                            <?php if ($post['status'] === 'published'): ?>
                                <small class="text-success"><?= $post['status'] ?></small>
                            <?php else: ?>
                                <small class="text-muted"><?= $post['status'] ?></small>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/post/' . $post['id'] . '/preview') ?>"
                                class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
                            <a href="<?= base_url('admin/post/' . $post['id'] . '/edit') ?>"
                                class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="#" data-href="<?= base_url('admin/post/' . $post['id'] . '/delete') ?>"
                                onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <div id="confirm-dialog" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="h2">Are you sure?</h2>
                        <p>The data will be deleted and lost forever</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function confirmToDelete(el) {
                document.getElementById("delete-button").setAttribute("href", el.dataset.href);
                var myModal = new bootstrap.Modal(document.getElementById('confirm-dialog'), {
                    keyboard: false
                });
                myModal.show();
            }
        </script>
    </div>

    <div class="container py-4">
        <footer class="text-center bg-body-tertiary">
            <!-- Copyright -->
            <div class="text-center p-3 bg-success rounded-3">
                <span class="mb-3 mb-md-0 text-white">© 2024 Copyright by <a class="text-white" href="https://github.com/alfaaannz?tab=repositories">Muhamad Alfan Alfajri</a></span>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- J

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>