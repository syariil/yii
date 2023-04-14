<?php
use yii\helpers\Html;

$this->title = 'Home';
// $this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="site-index">
    <div class="body-content">
        <!-- Main content -->
        <div class="content mx-4">
            <div class="site-index">
                <div class="card">
                    <div class="card-body text-center py-5 my-4">
                    <?= Html::img('@web/images/doodle.png', ['widht'=> '100%']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>