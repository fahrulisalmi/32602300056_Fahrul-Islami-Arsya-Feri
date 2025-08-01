<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> - Kursus Online</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>