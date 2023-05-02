<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\bimtekmagang\Bimtek */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bimtek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MATERI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KOTA_PELAKSANAAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DURASI')->textInput(['maxlength' => true]) ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
