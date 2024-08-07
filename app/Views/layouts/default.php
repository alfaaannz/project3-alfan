<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
scale=1.0">
  <title>Gizila Web-App</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

  <style>
    /* Terapkan font Montserrat ke semua elemen heading */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>

<body>
  <?php echo $this->include('partials/navbar'); ?>

  <div class="content">
    <?php echo $this->renderSection('content'); ?>
  </div>

  <?php echo $this->include('partials/footer'); ?>
</body>

</html>