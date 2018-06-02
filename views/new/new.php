<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use app\models\News;
  $model = new News;
?>

<?php if (Yii::$app -> session -> hasFlash('success')) :?>
  <div class="alert alert-success alert-dismissible mt-20" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <?= Yii::$app -> session -> getFlash('success'); ?>
  </div>
<?php endif; ?>
<?php if (Yii::$app -> session -> hasFlash('error')) :?>
  <div class="alert alert-danger alert-dismissible mt-20" role="alert">
      <?= Yii::$app -> session -> getFlash('error'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>

<?php
$create_form = ActiveForm::begin([
  'action' => ['news/index'],
  'method' => 'get'
]);
?>

<h1 class="text-center">Create News</h1>

<?= $create_form -> field($model, 'short_description'); ?>
<?= $create_form -> field($model, 'full_text'); ?>
<?= $create_form -> field($model, 'photo') -> textarea(); ?>
<?=HTML::submitButton('Create', ['class' => 'btn btn-success']); ?>

<?php $create_form = ActiveForm::end(); ?>
