<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-teal accent-3 navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->
        
        
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
            <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt">Login</i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link text-light']) ?>
        </li>

    </ul>
</nav>
<!-- /.navbar -->