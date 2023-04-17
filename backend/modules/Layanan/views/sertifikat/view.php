<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\layanan\LayananSertifikat */
?>
<div class="layanan-sertifikat-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'SERTIFIKAT',
            'INSTANSI',
            'CREATE_BY',
            'CREATE_AT',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_AT',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
