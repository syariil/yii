<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\layanan\LayananSertifikat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="layanan-sertifikat-form text-start">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'SERTIFIKAT')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'INSTANSI')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <?php if (!Yii::$app->request->isAjax){ ?>
          <div class="form-group col-8">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

  

    <?php ActiveForm::end(); ?>
    
</div>
