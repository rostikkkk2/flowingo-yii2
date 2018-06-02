<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Goods;
use app\models\Categorys;
use Yii;

  class GoodController extends Controller {
    public $layout = 'basic';

    public function actionNew() {
      $this -> view -> title = 'Goods NEw';
      $categorys = Categorys::AllCategorys();
      return $this -> render('new', compact('categorys'));
    }

    public function actionCreate() {
      $model = new Goods();
      if ($model -> load(Yii::$app -> request -> get())) {
        if ($model -> validate()) {
          Yii::$app -> session -> setFlash('success', 'Goods successfully created');
          $model -> save();
        }else {
          Yii::$app -> session -> setFlash('error', 'Goods not created');
        }
        return $this -> redirect('index.php?r=goods/new');
      }
    }
  }
