<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="wrapper">
<!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-teal navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand">
                <i class="fa fa-check text-white"></i>
                <a href="<?= Url::home()?>" class="nav-link brand-text font-weight-bold text-white">SI-KAL</a>
            </a>
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= Url::home()?>" class="nav-link"><i class="fas fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-list"></i> Daftar Layanan</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li>
                                <?= Html::a("<i class='fas fa-laptop-medical fa-fw bg-balck'></i> Pengujian & Kalibrasi AlKes", ['site/kalibrasi'], ['class' => 'dropdown-item']) ?>
                            </li>
                            <li>
                                <?= Html::a("<i class='fas fa-id-badge fa-fw bg-balck'></i> Pengujian Film Badge & TLD", ['site/film'], ['class' => 'dropdown-item']) ?>
                            </li>
                            <li>
                                <?= Html::a("<i class='fas fa-x-ray fa-fw bg-balck'></i> Uji Kesesuaian Pesawat Sinar-X", ['site/sinar'], ['class' => 'dropdown-item']) ?>
                            </li>
                            <li>
                                <?= Html::a("<i class='fas fa-bolt fa-fw bg-balck'></i> Inspeksi Sarana dan Prasarana", ['site/sarana'], ['class' => 'dropdown-item']) ?>
                            </li>
                            <li>
                                <?= Html::a("<i class='fas fa-microscope fa-fw bg-balck'></i> Praktek Kerja / Magang / Penelitian", ['site/magang'], ['class' => 'dropdown-item']) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <?= Html::a("<i class='fas fa-fw fa-phone-alt'></i>Kontak Kami", ['site/contact'], ['class' => 'nav-link']) ?>
                    </li>
                </ul>

                <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Masukkan Nomor Order" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute('site/login')?>" data-method="post"><i class="fas fa-sign-in-alt"></i> Login</a>            
                </li>
            </ul>
        </div>
    </nav>    <!-- /.navbar -->
</div>