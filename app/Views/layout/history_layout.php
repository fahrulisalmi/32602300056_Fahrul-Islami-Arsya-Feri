<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> - Kursus Online</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

    <div class="container history-page">

        <header class="header-image">

            <h1>KURSUS ONLINE

            </h1><img src="gambar/Folder31.png" alt="Deskripsi Gambar" width="500" height="400">
        </header>

        <?= $this->renderSection('content') ?>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>