<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\layanan\Penelitian */
?>
<div class="penelitian-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'NAMA',
            'INSTANSI',
            'MULAI_PENELITIAN',
            'AKHIR_PENELITIAN',
            'CREATE_AT',
            'CREATE_BY',
            'CREATE_IP',
            'UPDATE_AT',
            'UPDATE_BY',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
