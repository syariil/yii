<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use app\models\Posts;
    use yii\widgets\ActiveForm;

$this->title = 'Edit Post';
?>

<h1>Edit Post</h1>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
         <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('fails')): ?>
    <div class="alert alert-danger alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4><i class="icon fa fa-check"></i>Saved!</h4>
         <?= Yii::$app->session->getFlash('fails') ?>
    </div>
<?php endif; ?>
<div class="conteiner">
    <div class="d-flex justify-content-between flex-col">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($post, 'writer')->textInput(['value'=>$posts->writer]) ?>

        <?= $form->field($post, 'title')->textInput(['value'=>$posts->title]) ?>

        <?= $form->field($post, 'short_post')->textInput(['value'=>$posts->short_post]) ?>

        <?= $form->field($post, 'post')->textarea(['value'=>$posts->post]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?> 
    </div>
</div>