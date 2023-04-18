<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefUniversitas */
?>
<div class="ref-universitas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'UNIVERSITAS'
        ],
    ]) ?>

</div>
