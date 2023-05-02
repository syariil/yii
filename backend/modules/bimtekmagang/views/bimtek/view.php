<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\bimtekmagang\Bimtek */
?>
<div class="bimtek-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'MATERI',
            'KOTA_PELAKSANAAN',
            'DURASI',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
