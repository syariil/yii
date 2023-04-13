<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!-- Main content -->
<div class="content mx-4">
    <div class="site-login row">
        <div class="mt-5 offset-md-2 col-md-5 text-center">
            <i class="fa fa-check fa-10x text-teal"></i>
            <h4 class="mb-0">SI-KAL</h4>
            <p><i>Sistem Informasi Kalibrasi</i></p>
        </div>
        <div class="col-md-4 ml-5 mt-5">
            <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>
            <h1>Login</h1>
            <p>Username</p>
            <?= $form->field($model,'username', [
                'options' => ['class' => 'form-group has-feedback'],
                'template' => '{beginWrapper}{input}{error}{endWrapper}',
                'wrapperOptions' => ['class' => 'input-group mb-3']])
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')]) 
            ?>
            <p>Password</p>
            <?= $form->field($model, 'password', [
                'options' => ['class' => 'form-group has-feedback'],
                'template' => '{beginWrapper}{input}{error}{endWrapper}',
                'wrapperOptions' => ['class' => 'input-group mb-3']])
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
            ?>
            <div class="col">
                <div class="col-8">
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => '<div class="icheck-primary">{input}{label}</div>',
                        'labelOptions' => ['class' => ''],
                        'uncheck' => null])
                    ?>
                </div>
                <div class="col-4">
                    <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary  btn-block w-100']) ?>
                </div>
            </div>
            <?php \yii\bootstrap4\ActiveForm::end(); ?>
            <!-- /.social-auth-links -->
            <p class="mb-1">
                Lupa Kata sandi?<a href="<?= Url::to("reset") ?>"> klik disini!</a>
            </p>
        </div>
    </div>
</div>