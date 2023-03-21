<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;

// use Yii;

$this->title = 'Home';
?>
<div class="site-index my-2">
    <h2 class="card-title my-2 border-bottom border-2 ">
        New News
    </h2>
    <div class="row d-flex justify-content-center my-2 py-2 border-bottom">
        <?php foreach($new_post as $post): ?>
        <div class="card mx-2 my-2" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Html::encode("$post->title") ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                <?= Html::encode("$post->writer") ?>
                </h6>
                <p class="card-text lh-3 pt-2">
                <?= Html::encode("$post->short_post") ?>...
                </p>
                <a href="<?php echo Url::to(['site/detail', 'id' => Html::encode("$post->id")]) ?>" class="card-link bg-primary text-light px-1 py-1 rounded text-decoration-none">Continue</a>
            </div>
        </div>
        <?php endforeach;  ?>
    </div>


    <div class="body-content">
        <h2 class="card-title my-2 ">
            Raedmore
        </h2>
    <?php foreach($old_post as $post): ?>
        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title">
                <?= Html::encode("$post->title") ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                <?= Html::encode("$post->writer") ?> | <?= Yii::$app->formatter->asDate($post->created_at, 'l, M-D-Y')  ?> 
                </h6>
                <p class="card-text">
                <?= Html::encode("$post->short_post")?>...
                </p>
                <a href="#" class="btn btn-primary">Continue</a>
            </div>
        </div>
        <?php endforeach;  ?>
    </div>
</div>
