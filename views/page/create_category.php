<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  $my_form = ActiveForm::begin();
?>

<h1 class="text-center">Create Category Form</h1>
<?= $my_form -> field($model, 'title'); ?>
<?= $my_form -> field($model, 'is_visible'); ?>
<?= $my_form -> field($model, 'position'); ?>
<?=HTML::submitButton('Create', ['class' => 'btn btn-success'])?>

<?php $my_form = ActiveForm::end(); ?>
