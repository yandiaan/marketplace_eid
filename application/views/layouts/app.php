<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace EID</title>
    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/main.css'); ?>">
</head>
<body>

    <div id="overlay" style="display: none"></div>

    <!-- Navigation -->
    <?php $this->load->view('layouts/header'); ?>

    <!-- Content -->
    <div class="container mt-4">
        <?php $this->load->view($content); ?>
    </div>

    <!--Footer -->
    <?php $this->load->view('layouts/footer'); ?>

    <!-- Core JS -->
    <script src="<?= base_url('assets/dist/main.js'); ?>"></script>
</body>
</html>