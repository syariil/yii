<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\referensi\RefAgama $model */

$this->title = 'Create Ref Agama';
$this->params['breadcrumbs'][] = ['label' => 'Ref Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-agama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
