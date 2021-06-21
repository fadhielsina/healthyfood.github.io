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

<?php $this->load->view('navbar', $page) ?>
<?php
$disabled = '';
if ($login_act == 0) {
    $disabled = 'disabled';
}
?>

<body class="bg-light">
    <div class="container">
        <div class="text-center">
            <h4>Chcekout</h4>
        </div>
    </div>
    <div class="container">
        <h5><i class="fa fa-map-marker"> Alamat Pengiriman</i></h5>
        <span><?= strtoupper($this->session->userdata('username')) ?> <b>|</b> <?= $this->session->userdata('phone') ?></span>
        <br>
        <span><?= $this->session->userdata('address') ?></span>
    </div>
    <hr>
    <div class="container">
        <i class="fa fa-shopping-bag fa-lg"> Pasar Sarijadi , Jalan Sarijadi</i>
    </div>
    <hr>
    <div class="container">
        <table class="table">
            <thead style="background-color: white;">
                <tr>
                    <th scope="col">Produk Dipesan</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal Produk</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data_sayur as $sayur) : ?>
                    <tr>
                        <th scope="row"><img style="width: 160px;height: 110px;" src="<?= base_url('assets/img/') ?><?= $sayur['img'] ?>.jpg" class="img-thumbnail" alt="..."> <?= $sayur['nama'] ?></th>
                        <td style="padding-top: 50px;">
                            <input type="hidden" name="harga_sayur[]" value="<?= $sayur['harga'] ?>">
                            <h4><?= number_format($sayur['harga']) ?>/Kg</h4>
                        </td>
                        <td style="padding-top: 45px;"><input type="number" value="0" min="0" name="sayur[]" <?= $disabled ?> /></td>
                        <td><input type="text" value="0" style="margin-top: 33px; width: 176px; font-weight:bold; font-size: 1.2rem;" class="form-control text-center" disabled name="total[]"></td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Total Pemesanan Produk :</h4>
            </div>
            <div class="col" style="margin-right: 120px;">
                <h4 style="text-align:right;">Rp. 200.000</h4>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <i class="fa fa-shipping-fast fa-lg"> Opsi Pengiriman :</i>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <span>Grab Express Instant</span>
            </div>
            <div class="col" style="margin-right: 120px;">
                <h5 style="text-align:right;">Rp. 20.000</h5>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <i class="fa fa-credit-card fa-lg"> Metode Pembayaran :</i>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label">Bank Mandiri</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label">Bank BCA</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label">Bank BNI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label">Bank BRI</label>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="text-align:right;">
        <h4 style="margin-right:110px;">Total Pembayaran : Rp. 220.000</h4>
        <br>
        <button class="btn btn-warning" style="margin-right:110px;">Buat Pemesanan</button>
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