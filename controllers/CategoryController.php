<?php

namespace app\controllers;

use yii\web\Controller;
use yii\helpers\VarDumper;
use app\models\Categorys;
use yii\filters\AccessControl;
use Yii;

  class CategoryController extends Controller {
    public $layout = 'basic';

    public function actionShow($id) {
      $list_categorys = Categorys::AllCategorys();
      $all_goods = Goods::find() -> where(['category_id' => $id]) -> all();
      return $this -> render('/page/catalog', compact('all_goods', 'list_categorys'));
    }


    }
  
