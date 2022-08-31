<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <style>
        body {
            font-family: 'Quicksand';
        }
        .content {
            padding-left: 75px;
            padding-right: 75px;
        }
    </style>
  </head>
  <body class="bg-light">

    <!-- Navigation -->
    <?php $this->load->view('layouts/header'); ?>
    <!-- /Navigation -->

    <!-- Content -->
    <div class="container-fluid content mt-4">
        <?php $this->load->view($content); ?>
    </div>
    <!-- /Content -->

    <!--Footer -->
    <?php $this->load->view('layouts/footer'); ?>
    <!-- /Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>