<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefProdi */
?>
<div class="ref-prodi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'PROGRAM_STUDI'
        ],
    ]) ?>

</div>
