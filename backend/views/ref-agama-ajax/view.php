<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefAgama */
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
