<?php

use yii\helpers\Url;
?>

<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php Url::to('/site/login') ?>" class="brand-link">
        <img src="<?=$assetDir?>/img/logo-kalpataru.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width : 32px; height:32px;">
        <span class="brand-text font-weight-bold">SI-KAL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt'],
                ],
                'linkTemplate' => '<a class="nav-link {active} bg-teal" href="{url}" {target}>{icon} {label}</a>' ,
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>