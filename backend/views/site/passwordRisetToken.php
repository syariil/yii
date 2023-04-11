<?php 
use Yii;
use yii\helpers\Html;
?>

<?= Yii::t('user', 'Hello') ?>,

<?= Yii::t('user', 'Follow the link below to reset your password:') ?>

<?= Html::a(Html::encode(Yii::t('user', 'Reset password')), Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset])) ?> 
