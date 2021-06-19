<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Healty Food</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('') ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/fontawesome/css/all.css"" rel=" stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style type="text/css">
        h2 {
            margin-top: 3rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.5);
        }

        h3 {
            margin-top: 2rem;
        }

        .input-group,
        input.test-value-input {
            max-width: 250px;
        }
    </style>
</head>

<?php $this->load->view('navbar', $page); ?>

<body class="bg-light">
    <div class="text-center">
        <div class="d-grid gap-2">
            <a href="#" style="background-color: white;" class="btn btn-light" type="button">PILIHAN PASAR</a>
        </div>
    </div>
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <?php foreach ($list_pasar as $pasar) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="width: 286px; height:180px;" src="<?= base_url('assets/img/') ?><?= $pasar['img'] ?>.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="<?= $pasar['id'] ?>">
                                <h5 class="card-title"><?= $pasar['nama_pasar'] ?></h5>
                            </a>
                            <p class="card-text"><?= $pasar['alamat'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

<script src="<?= base_url('') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('') ?>assets/src/bootstrap-input-spinner.js"></script>
<script src="<?= base_url('') ?>assets/src/custom-editors.js"></script>

</html>