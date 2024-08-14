<nav class="container navbar navbar-expand-md navbar-dark fixed-top bg-success shadow">
    <div class="container">
        <a class="navbar-brand ms-4" href="<?= base_url() ?>">
            <img src="<?= base_url('img/navlogo-gizila.png') ?>" alt="logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fs-5">
                <li class="nav-item me-4">
                    <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>