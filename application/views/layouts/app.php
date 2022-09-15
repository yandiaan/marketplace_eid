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
    <script type="text/javascript" src="<?= base_url('assets/src/js/jquery.min.js');?>"></script>

    <!-- Content -->
    <div class="mt-4">
        <?php $this->load->view($content); ?>
    </div>

    <!-- Modal login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="card shadow-lg p-4">
                    <div class="text-center mb-3">
                        <img src="https://estimator.id/assets/img/logo.png" alt="brand-logo">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="fw-bold">Sign In</h4>
                            </div>
                            <div class="col-6 text-end mt-1">
                                <a href="<?= base_url('/register') ?>" class="text-decoration-none fw-semibold"
                                    style="font-size: 14px;  color: #66AA23;">Daftar</a>
                            </div>
                        </div>
                        <form action="" class="mt-4">
                            <div class="mb-3">
                                <input type="email" class="form-control" style="border-radius: 2px; font-size: 13px;"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="mb-5">
                                <input type="email" class="form-control" style="border-radius: 2px; font-size: 13px;"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button type="submit" class="btn btn-sm btn-primary fw-semibold"
                                    style="border-radius: 2px;">LOG IN</button>
                                <a href="" class="text-decoration-none" style="color: #66AA23;"><small>Lupa
                                        password</small></a>
                            </div>
                        </form>
                        <p class="text-center"><small>atau masuk dengan</small></p>
                        <div class="mb-3 d-grid gap-2">
                            <button type="submit" class="btn btn-sm border btn-google fw-semibold"> <img
                                    src="<?= base_url('') ?>/assets/icon/Google.svg" alt="" width="20" class="m-1">
                                Google</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer -->
    <?php $this->load->view('layouts/footer'); ?>

    <!-- Core JS -->

    <script src="<?= base_url('assets/dist/main.js'); ?>"></script>

</body>

</html>