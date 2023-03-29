<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\modules\referensi\models\RefProvinsiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ref-provinsi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_PROVINSI') ?>

    <?= $form->field($model, 'PROVINSI') ?>

    <?= $form->field($model, 'CREATE_BY') ?>

    <?= $form->field($model, 'CREATE_DATE') ?>

    <?= $form->field($model, 'CREATE_IP') ?>

    <?php // echo $form->field($model, 'UPDATE_BY') ?>

    <?php // echo $form->field($model, 'UPDATE_DATE') ?>

    <?php // echo $form->field($model, 'UPDATE_IP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
