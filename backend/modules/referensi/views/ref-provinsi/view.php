<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefProvinsi */
?>
<div class="ref-provinsi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_PROVINSI',
            'PROVINSI',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
