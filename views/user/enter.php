<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  $my_form = ActiveForm::begin(['action' => ['/user/signin'], 'method' => 'post']);
?>

<h1 class="text-center">SignIn</h1>
<?= $my_form -> field($model, 'email'); ?>
<?= $my_form -> field($model, 'password') -> passwordInput(); ?>
<?= $my_form -> field($model, 'rememberMe') -> checkbox(); ?>

<?=HTML::submitButton('Sign Up', ['class' => 'btn btn-success'])?>

<?php $my_form = ActiveForm::end(); ?>
