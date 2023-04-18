<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\bimtekmagang\Magang */
?>
<div class="magang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'NIM',
            'NAMA',
            'UNIVERSITAS',
            'FAKULTAS',
            'PRODI',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
