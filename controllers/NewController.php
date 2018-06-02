<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\News;

use Yii;

  class NewController extends Controller {
    public $layout = 'basic';

    public function actionNew() {
      $this -> view -> title = 'News NEw';
      return $this -> render('new');
    }

    public function actionIndex() {
      $model = new News();
      if ($model -> load(Yii::$app -> request -> get())) {
        if ($model -> validate()) {
          Yii::$app -> session -> setFlash('success', 'News successfully created');
          $model -> save();
        }else {
          Yii::$app -> session -> setFlash('error', 'News not created');
        }
        return $this -> redirect('index.php?r=news/new');
      }
    }
  }
