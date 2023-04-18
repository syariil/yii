<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\akreditasi\RefMutu */
?>
<div class="ref-mutu-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'MUTU',
            'CREATE_BY',
            'CREATE_DATE',
            'CREATE_IP',
            'UPDATE_BY',
            'UPDATE_DATE',
            'UPDATE_IP',
        ],
    ]) ?>

</div>
