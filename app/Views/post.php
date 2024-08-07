<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>

<div class="container p-5 mb-10 bg-body-tertiary bg-success rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-white">Blog</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h5 class="h5"><a href="/post/<?=
                        $post['slug'] ?>"><?= $post['title'] ?></a></h5>
                    <p><?= substr(
                        $post['content'],
                        0,
                        120
                    ) ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php echo $this->endSection(); ?>