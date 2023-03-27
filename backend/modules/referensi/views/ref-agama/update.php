<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\referensi\RefAgama $model */

$this->title = 'Update Ref Agama: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Ref Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-agama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
