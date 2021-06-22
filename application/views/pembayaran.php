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
            .input-group,
            input.test-value-input {
                max-width: 130px;
            }
        </style>
    </head>
</head>

<body class="bg-light">
    <div class="container" style="margin-top: 50px;">
        <div class="text-center">
            <h4>Pembayaran</h4>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Total Pembyaran</h3>
            </div>
            <div class="col">
                <h3 style="text-align: right; margin-right:100px;">Rp. 220.000</h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <span style="font-size: 1.5rem; margin-left:200px;">Bank BNI</span><br>
        <span style="font-size: 1.5rem; margin-left:200px;">No Rekening :</span>
        <h2 class="text-center" style="color:red;">126 081351 278197</h2>
        <span style="font-size: 1.5rem; margin-left:200px;">Petunjuk Transfer ATM :</span> <br>
        <span> <i class="fa fa-chevron-circle-down" style="margin-left: 200px; margin-top:10px;"></i> Pilih Transaksi Lainnya > Transfer > Ke Rek BCA Virtual Account.</span><br><br>
        <span> <i class="fa fa-chevron-circle-down" style="margin-left: 200px; margin-top:10px;"></i> Masukkan nomor Virtual Account <b><i>126 081351278197</i></b> dan pilih Benar.</span><br><br>
        <span> <i class="fa fa-chevron-circle-down" style="margin-left: 200px; margin-top:10px;"></i> Periksa informasi yang tertera di layar.</span>
        <br><br>
        <div class="text-center">
            <button class="btn btn-warning btn-lg">Selesai</button>
        </div>
    </div>
    <footer style="margin-top: 50px;">
    </footer>
</body>

<script>
    var $sayur = $("[name='sayur[]']");
    var $harga = $("[name='harga_sayur[]']");
    $sayur.on("input", function(event) {
        var hasil = 0;
        for (var i = 0; i < $sayur.length; i++) {
            var $total = $sayur[i].value * $harga[i].value;
            document.getElementsByName('total[]')[i].value = $total;
            hasil += $total;
            document.getElementById('total').innerText = `Rp. ${hasil}`;
        }
    })
</script>

<script src="<?= base_url('') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('') ?>assets/src/bootstrap-input-spinner.js"></script>
<script src="<?= base_url('') ?>assets/src/custom-editors.js"></script>
<script>
    $("input[type='number']").inputSpinner()
    $(".buttons-only").inputSpinner({
        buttonsOnly: true
    })
</script>

</html>