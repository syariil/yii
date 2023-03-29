<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\referensi\RefAgama $model */

$this->title = 'Update Agama ' . $model->AGAMA;
$this->params['breadcrumbs'][] = ['label' => 'Ref Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AGAMA, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-agama-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
