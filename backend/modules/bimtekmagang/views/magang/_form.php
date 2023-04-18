<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\bimtekmagang\Magang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="magang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNIVERSITAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAKULTAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRODI')->textInput(['maxlength' => true]) ?>

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
