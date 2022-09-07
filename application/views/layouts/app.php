<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace EID</title>

    <!-- Core CSS -->

    <link rel="stylesheet" href="<?= base_url('assets/dist/main.css'); ?>">

    <!-- Custom CSS -->

    <!-- Font family & Icons -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>
<body>

    <div id="overlay" style="display: none"></div>

    <!-- Navigation -->
    <?php $this->load->view('layouts/header'); ?>

    <!-- Content -->
    <div class="mt-4">
        <?php $this->load->view($content); ?>
    </div>

    <!--Footer -->
    <?php $this->load->view('layouts/footer'); ?>

    <!-- Core JS -->
    <script src="<?= base_url('assets/dist/main.js'); ?>"></script>
</body>
</html>