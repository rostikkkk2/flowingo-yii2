<?php
$this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Categorys;
?>

<a href="/categorys?order=active">Только активные</a>
<a href="/categorys?order=newest">По дате создание</a>
<a href="/categorys?order=by_title_asc">По Название A-Z</a>
<a href="/categorys?order=by_title_desc">По Название Z-A</a>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>TITle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorys as $category): ?>
      <tr>
        <?php if ($category -> is_visible == 1) { ?>
          <td><?= $category -> id ?></td>
          <td><?= $category -> title ?></td>
        <td>
          <?php
          $create_form = ActiveForm::begin([
            'action' => ['category/delete/' . $category -> id],
            'method' => 'post'
          ]);
          ?>
          <?=HTML::submitButton('Delete', ['class' => 'btn btn-success']); ?>
          <?php $create_form = ActiveForm::end(); ?>
        <?php } ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<span>
  <ul class="nav nav-pills">
    <li role="presentation"><a href="/admin/goods/new">new_goods</a></li>
    <li role="presentation"><a href="/admin/goods/index">all_goods</a></li>
    <li role="presentation"><a href="/admin/categorys/new">new_category</a></li>
    <li role="presentation" class="active"><a href="/admin/categorys/index">all_categorys</a></li>
  </ul>
</span>
