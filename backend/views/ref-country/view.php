<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefCountry */
?>
<div class="ref-country-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_COUNTRY',
            'COUNTRY',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
