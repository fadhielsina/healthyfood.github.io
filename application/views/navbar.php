<?php
$a_sayur = '';
$a_buah = '';
$a_daging = '';
$a_ikan = '';
$a_jajanan = '';

if ($page == 'sayuran') {
    $a_sayur = 'active';
}
if ($page == 'buah') {
    $a_buah = 'active';
}
if ($page == 'daging') {
    $a_daging = 'active';
}
if ($page == 'ikan') {
    $a_ikan = 'active';
}
if ($page == 'jajanan') {
    $a_jajanan = 'active';
}
?>

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
                    <a class="nav-link <?= $a_sayur ?>" href="<?= base_url('menu/sayuran') ?>">Sayuran-Sayuran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $a_buah ?>" href="<?= base_url('menu/buah') ?>">Buah-Buahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $a_daging ?>" href="<?= base_url('menu/daging') ?>">Daging Segar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $a_ikan ?>" href="<?= base_url('menu/ikan') ?>">Ikan Segar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $a_jajanan ?>" href="<?= base_url('menu/jajanan') ?>">Jajanan Pasar</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php if ($login_act == 0) : ?>
                    <a href="<?= base_url('welcome/register') ?>" class="btn btn-outline-success" style="margin-right: 10px;">
                        Register
                    </a>
                    <a href="<?= base_url('welcome/login'); ?>" class="btn btn-outline-success">
                        Login
                    </a>
                <?php else : ?>
                    <a href="<?= base_url('menu/keranjang') ?>" style="margin-top:8px; margin-bottom:0px;margin-right:15px;"><i class="fa fa-shopping-cart fa-lg"></i></a>
                    <h5 style="margin-top:5px; margin-bottom:0px;margin-right:15px;">|</h5>
                    <h5 style=" margin-top:5px; margin-bottom:0px;margin-right:15px; font-family:Times New Roman, Times, serif;"><?= $this->session->userdata('username') ?></h5>
                    <h5 style="margin-top:5px; margin-bottom:0px;margin-right:15px;">|</h5>
                    <a href="<?= base_url('welcome/logout'); ?>" class="btn btn-danger">
                        Logout
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>