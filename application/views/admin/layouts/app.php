<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Marketplace EID</title>


    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/extensions/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/extensions/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/extensions/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/extensions/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div style="background:#A2DB5E" class="navbar-bg"></div>

            <!-- start Navbar Components -->
            <?php $this->load->view('admin/components/navbar') ?>
            <!-- and Navbar Components -->

            <!-- Start Sidebar Components -->

            <?php $this->load->view('admin/components/sidebar') ?>

            <!-- End Sidebar Components -->


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Marketplace EID
                </div>
                <div class="footer-right">
                    1.1.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('admin') ?>/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('/assets/admin') ?>/extensions/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('/assets/admin') ?>/extensions/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('/assets/admin') ?>/extensions/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url('/assets/admin') ?>/extensions/summernote/dist/summernote-bs4.js"></script>
    <script src="<?= base_url('/assets/admin') ?>/extensions/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('/assets/admin') ?>/js/scripts.js"></script>
    <script src="<?= base_url('/assets/admin') ?>/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('/assets/admin') ?>/js/page/index.js"></script>
</body>

</html>