<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefGoldarah */
?>
<div class="ref-goldarah-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'GOL_DARAH',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
