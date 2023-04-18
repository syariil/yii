<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\NavBar;;
?>

<aside class="main-sidebar sidebar-light-teal elevation-4">
    <!-- Brand Logo -->
    <a href="<?php Url::to('/site/login') ?>" class="brand-link">
         <?= Html::img('@web/images/logo.png', ['alt' => 'Logo Sikal', 'class' => 'brand-image img-circle elevation-3', 'widht'=> '35px', 'height' => '35px']) ?>
        <span class="brand-text font-weight-bold">SI-KAL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php if(!Yii::$app->user->isGuest):  ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                <?= 
                    Yii::$app->user->identity->username;
                ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                // menu
                'items' => [
                    [
                        'label' => 'Dashboard', 'icon' => 'tachometer-alt', 'url' => Url::home()
                    ],
                    // referensi
                    [
                        'label' => 'Administrator', 'iconStyle' => 'far', 'icon' => 'folder-open',
                        'items' => [
                            ['label' => 'Agama', 'icon' => 'mosque', 'url' => ['/referensi/ref-agama']],
                            ['label' => 'Kelamin', 'icon' => 'venus-mars', 'url' => ['/referensi/ref-kelamin']],
                            ['label' => 'Golongan Darah', 'icon' => 'heart', 'url' => ['/referensi/ref-goldarah']],
                            ['label' => 'Provinsi', 'icon' => 'globe', 'url' => ['/referensi/ref-provinsi']],
                            ['label' => 'RBAC', 'icon' => 'id-card', 'url' => ['/admin']],
                        ]
                    ],
                    // layananan
                    [
                        'label' => 'Tata Operasional', 'icon' => 'list',
                        'items' => [
                            ['label' => 'Sertikasi', 'icon' => 'certificate', 'url' => ['/layanan/sertifikat']],
                            ['label' => 'Magang', 'icon' => 'briefcase', 'url' => ['/layanan/magang']],
                            ['label' => 'Penelitian', 'icon' => 'search', 'url' => ['/layanan/penelitian']],
                        ]
                    ],
                    // mutu dan akreditasi
                    [
                        'label' => 'Mutu dan Akreditasi', 'icon' => 'medal',
                        'items' => [
                            ['label' => 'Mutu', 'icon' => 'diploma', 'url' => ['/layanan/ref-mutu']],
                            ['label' => 'Akreditasi', 'icon' => 'award', 'url' => ['/layanan/ref-akreditasi']],
                        ]
                    ],

                    
                    // ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => '', 'header' => true],
                    // ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    
                ],
                'linkTemplate' => '<a class="nav-link {active} bg-teal" href="{url}" {target}>{icon} {label}</a>' ,
            ]);
            ?>
        </nav>
        <?php else: ?>
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
        <?php endif; ?>
        <!-- Sidebar user panel (optional) -->
        
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>