<?php

  namespace app\controllers;
  use yii\web\Controller;
  use app\models\Recalls;
  use Yii;

  class RecallController extends Controller {
    public $layout = 'basic';

    public function actionCreate() {
      $request = Yii::$app -> request -> get();
      $model = new Recalls;
      $model -> phone_number = $request['Recalls']['phone_number'];
      $model -> save();
    }
  }

?>
