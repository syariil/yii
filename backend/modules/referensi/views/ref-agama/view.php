<?php

use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\referensi\RefAgama $model */

$this->title = $model->AGAMA;
$this->params['breadcrumbs'][] = ['label' => 'Ref Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ref-agama-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'AGAMA',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
