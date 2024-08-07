<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>

<div class="container p-5 mb-10 bg-body-tertiary bg-success rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-white">Halaman Blog Kami</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5"><?= $post['title'] ?></h5>
                <span><?= $post['author'] ?> |
                    <?=
                        $post['created_at'] ?>
                </span>
                <p><?= $post['content'] ?></p>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>