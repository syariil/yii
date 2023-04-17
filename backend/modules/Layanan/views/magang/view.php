<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\layanan\Magang */
?>
<div class="magang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'NAMA',
            'INSTANSI',
            'MULAI_MAGANG',
            'AKHIR_MAGANG',
            'CREATE_AT',
            'CREATE_BY',
            'CREATE_IP',
            'UPDATE_AT',
            'UPDATE_BY',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
