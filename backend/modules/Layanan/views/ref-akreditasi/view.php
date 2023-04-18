<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\akreditasi\RefAkreditasi */
?>
<div class="ref-akreditasi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'AKREDITASI',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
