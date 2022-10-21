<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace EID</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/src/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Core CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/dist/main.css'); ?>"> -->

    <link href="<?= base_url('assets/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body>

    <div id="overlay" style="display: none"></div>

    <!-- Navigation -->
    <?php $this->load->view('admin/layouts/header'); ?>

    <!-- Begin Page Content -->
    <!-- Content -->
    <div class="container-fluid mt-4">
        <?php $this->load->view($content); ?>
    </div>


    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
        var site_url = "<?php echo site_url(); ?>";
    </script>
    <!-- test -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/src/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>