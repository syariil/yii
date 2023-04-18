<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\layanan\Magang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="magang-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col">
            <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>
        </div>
            <div class="col">
                <?= $form->field($model, 'INSTANSI')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col text-end">
            <?php if (!Yii::$app->request->isAjax){ ?>
                  <div class="form-group text-end">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            <?php } ?>
        </div>


  

    <?php ActiveForm::end(); ?>
    
</div>
