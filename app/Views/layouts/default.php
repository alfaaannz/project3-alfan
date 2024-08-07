<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
scale=1.0">
  <title>MyBlog</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
  <?php echo $this->include('partials/navbar'); ?>

  <div class="content">
    <?php echo $this->renderSection('content'); ?>
  </div>

  <?php echo $this->include('partials/footer'); ?>
</body>

</html>