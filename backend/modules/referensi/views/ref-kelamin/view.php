<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefKelamin */
?>
<div class="ref-kelamin-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'ID',
            'JENIS_KELAMIN',
            // 'CREATE_DATE',
            // 'CREATE_BY',
            // 'CREATE_IP',
            // 'UPDATE_DATE',
            // 'UPDATE_BY',
            // 'UPDATE_IP',
        ],
    ]) ?>

</div>
