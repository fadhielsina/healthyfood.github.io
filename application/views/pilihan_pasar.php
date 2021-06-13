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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('Welcome') ?>">
            <b>
                <font face="Courier New" color="green">HealthyFood</font>
            </b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu/sayuran') ?>">Sayuran-Sayuran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu/buah') ?>">Buah-Buahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu/daging') ?>">Daging Segar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('menu/ikan') ?>">Ikan Segar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu/jajanan') ?>">Jajanan Pasar</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="<?= base_url('welcome/register') ?>" class="btn btn-outline-success" style="margin-right: 10px;">
                    Register
                </a>
                <a href="<?= base_url('welcome/login'); ?>" class="btn btn-outline-success">
                    Login
                </a>
            </div>
        </div>
    </div>
</nav>

<body style="background-color: aqua;">
    <div class="text-center">
        <div class="d-grid gap-2">
            <a href="#" style="background-color: white;" class="btn btn-light" type="button">PILIHAN PASAR</a>
        </div>
    </div>
    <div class="list-group">
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Plasari, Jalan Palasari, Malabar, Kota Bandung</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Cihapit dan Cikaso, Jalan Cihapit, Bandung Wetan</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Cijerah, Jalan Melong, Cijerah</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Cicaheum, Jalan Antapani Lama</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Sarijadi, Jalan Sarijadi</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Sederhana, Jalan Jurang</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Astana Anyar, Jalan Astana Anyar</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Ujung Berung, Jalan Ujung Berung</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Kosambi, Jalan Jendral Ahmad Yani</a>
        <a href="#" style="background-color: aqua;" class="list-group-item list-group-item-action">Pasar Sederhana . PD - Kota Bandung</a>
    </div>
</body>

<script src="<?= base_url('') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('') ?>assets/src/bootstrap-input-spinner.js"></script>
<script src="<?= base_url('') ?>assets/src/custom-editors.js"></script>

</html>