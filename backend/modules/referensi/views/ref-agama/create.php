<?php

use yii\helpers\Html;

$this->title = 'Create Ref Agama';
$this->params['breadcrumbs'][] = ['label' => 'Ref Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ref-agama-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
