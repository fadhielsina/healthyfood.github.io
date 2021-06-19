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
    <div class="row text-center">
        <div class="col">
            <h4 style="margin-left: 10px;">Keranjang Belanja </h4>
        </div>
        <div class="col">
            <h4>Total :</h4>
        </div>
        <div class="col">
            <h4 style="margin-left: -450px;" id="total"></h4>
        </div>
        <div class="col">
            <?php if ($login_act == 1) : ?>
                <button type="submit" class="btn btn-warning btn-sm">Checkout</button>
            <?php endif; ?>
        </div>
    </div>
    <div class="">
        <table class="table">
            <thead style="background-color: white;">
                <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Kuantitas / Kg</th>
                    <th scope="col">Total Harga</th>
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