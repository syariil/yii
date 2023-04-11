<?php
use yii\helpers\Html;
use yii\helpers\Url;
$assetDir = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row d-flex justify-content-center">
            <div class="mt-4 col-md-4 mt-5">
                <img src="<?=$assetDir?>/img/logo-kalpataru.png" alt="AdminLTE Logo" class="brand-image align-self-center ml-5" style="opacity: .8; width : 250px; height:225px;">
                <p class="d-flex justify-content-center font-weigth-bold text-lg pt-2">
                    SI-KAL
                </p>
                <p class="d-flex justify-content-center font-italic text-md pb-2">
                    Sistem Informasi Kalibrasi
                </p>
            </div>
            <div class="col-md-4 mt-5">
                <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>
                <p>Username</p>
                <?= $form->field($model,'username', [
                    'options' => ['class' => 'form-group has-feedback'],
                    'template' => '{beginWrapper}{input}{error}{endWrapper}',
                    'wrapperOptions' => ['class' => 'input-group mb-3']
                ])
                    ->label(false)
                    ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
                
                <p>Password</p>
                <?= $form->field($model, 'password', [
                    'options' => ['class' => 'form-group has-feedback'],
                    'template' => '{beginWrapper}{input}{error}{endWrapper}',
                    'wrapperOptions' => ['class' => 'input-group mb-3']
                ])
                    ->label(false)
                    ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
        
                <div class="col">
                    <div class="col-8">
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => '<div class="icheck-primary">{input}{label}</div>',
                            'labelOptions' => [
                                'class' => ''
                            ],
                            'uncheck' => null
                        ]) ?>
                    </div>
                    <div class="col-4">
                        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary  btn-block w-100']) ?>
                    </div>
                </div>
                <?php \yii\bootstrap4\ActiveForm::end(); ?>
                <!-- /.social-auth-links -->
        
                <p class="mb-1">
                    Lupa Kata sandi?<a href="<?= Url::to("/yii/backend/web/site/request-password-reset") ?>"> klik disini!</a>
                </p>
            </div>
            
        </div>

    </div>
    <!-- /.login-card-body -->
</div>