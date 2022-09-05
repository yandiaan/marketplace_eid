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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>

    <div id="overlay" style="display: none"></div>

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg sticky-top bg-white px-5 py-3 shadow-sm">
        <div class="container">
            <img src="https://estimator.id/assets/img/logo.png" alt="brand-logo">
            <span class="ms-4 "><strong><?= $title ?></strong></span>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <span class="navbar-text">
                    <a href="" class="text-decoration-none">Butuh bantuan ?</a>
                </span>
            </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <?php $this->load->view($content); ?>
    </div>

    <!--Footer -->
    <?php $this->load->view('layouts/footer'); ?>

    <!-- Core JS -->
    <script src="<?= base_url('assets/dist/main.js'); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var search = document.getElementById('dropdown-search');
            var overlay = document.getElementById('overlay');

            search.addEventListener('focusin', function(e) {
                overlay.style.display = "block";
            });

            search.addEventListener('focusout', function(e) {
                overlay.style.display = "none";
            });

        }, false);
    </script>
</body>

</html>