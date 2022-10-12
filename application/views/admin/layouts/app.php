<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Marketplace EID</title>



    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('/assets/admin') ?>/css/components.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.css" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"></script>
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
                <section class="section"><?php $this->load->view($content) ?></section>
            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Marketplace EID
                </div>
                <div class="footer-right">
                    1.1.0
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/af-2.4.0/sb-1.3.4/datatables.min.js"></script>

    <script src="<?= base_url('/assets/admin') ?>/js/stisla.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('/assets/admin') ?>/js/scripts.js"></script>
    <script src="<?= base_url('/assets/admin') ?>/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('/assets/admin') ?>/js/page/index.js"></script>


    <script type="text/javascript">
        // var table;

        // $(document).ready(function() {

        //     //datatables
        //     table = $('#tabel-produk').DataTable({

        //         "processing": true, //Feature control the processing indicator.
        //         "serverSide": true, //Feature control DataTables' server-side processing mode.
        //         "order": [], //Initial no order.

        //         // Load data for the table's content from an Ajax source
        //         "ajax": {
        //             "url": "<?php echo base_url('Suplier/Produk/DatatableProduk') ?>",
        //             "type": "POST"
        //         },

        //         //Set column definition initialisation properties.
        //         "columnDefs": [{
        //             "targets": [0], //first column / numbering column
        //             "orderable": false, //set not orderable
        //         }, ],

        //     });

        // });

        // datatables
        $(document).ready(function() {
            // $('#tabel-produk').DataTable();
            var table = $('#tabel-produk').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "lengthChange": true,
                "buttons": ['excel', 'print', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>