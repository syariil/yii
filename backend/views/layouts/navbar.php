<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-teal text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="nav-link text-dark" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
            <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <?php if(!Yii::$app->user->isGuest): ?>
                <?= Html::a('<i class="fas fa-sign-out-alt "><span class="ml-1"></span>Logout</span></i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link text-light']) ?>
                <?php else: ?>
                    <?= Html::a('<i class="fas fa-sign-out-alt "><span class="ml-1"></span>Login</span></i>', ['/site/login'], ['data-method' => 'post', 'class' => 'nav-link text-light']) ?>
            <?php endif; ?>
        </li>
    </ul>
</nav>
<!-- /.navbar -->