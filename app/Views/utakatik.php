<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i></h1>
                <img src="<?= base_url('img/navlogo-gizila.png') ?>" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                    <a href="<?= base_url('about') ?>" class="nav-item nav-link">About</a>
                    <a href="<?= base_url('post') ?>" class="nav-item nav-link">Blog</a>
                    <a href="<?= base_url('contact') ?>" class="nav-item nav-link">Contact</a>
                    <a href="<?= base_url('faqs') ?>" class="nav-item nav-link">FAQ</a>
                </div>
                <a href="<?= base_url('admin/post') ?>" class="btn btn-primary rounded-pill py-2 px-4">Get Started</a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->