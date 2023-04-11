<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>