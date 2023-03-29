<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefAgama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-agama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AGAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_BY')->textInput() ?>

    <?= $form->field($model, 'CREATE_DATE')->textInput() ?>

    <?= $form->field($model, 'CREATE_IP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput() ?>

    <?= $form->field($model, 'UPDATE_DATE')->textInput() ?>

    <?= $form->field($model, 'UPDATE_IP')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
