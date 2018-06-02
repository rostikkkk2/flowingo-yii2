<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use yii\helpers\ArrayHelper;
  use app\models\Goods;
  use app\models\Categorys;
  $model = new Goods;
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
    'action' => ['goods/create'],
    'method' => 'get'
  ]);
  ?>

  <h1 class="text-center">Create Goods</h1>

  <?= $create_form -> field($model, 'title'); ?>
  <?= $create_form -> field($model, 'price'); ?>
  <?= $create_form -> field($model, 'description') -> textarea(); ?>
  <?= $create_form -> field($model, 'photo_url') -> textarea(); ?>
  <?= $create_form -> field($model, 'is_newing') -> checkbox(); ?>
  <?= $create_form -> field($model, 'is_top') -> checkbox(); ?>
  <?= $create_form -> field($model, 'is_visible') -> checkbox(); ?>
  <?php $id = ArrayHelper::map($categorys, 'id', 'title') ?>
  <?= $create_form -> field($model, 'category_id') -> dropDownList($id);?>
  <?=HTML::submitButton('Create', ['class' => 'btn btn-success']); ?>

  <?php $create_form = ActiveForm::end(); ?>
