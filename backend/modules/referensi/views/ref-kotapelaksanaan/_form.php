<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefKotapelaksanaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-kotapelaksanaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KOTA_PELAKSANAAN')->textInput(['maxlength' => true]) ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
