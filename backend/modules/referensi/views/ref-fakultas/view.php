<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefFakultas */
?>
<div class="ref-fakultas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'FAKULTAS'
        ],
    ]) ?>

</div>
