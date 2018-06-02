<?php

namespace app\commands;


use yii\console\Controller;
use app\models\Categorys;
use Faker\Factory;


class SeedsController extends Controller {
  public function actionCreateCategorys($categorys_number = 1) {
    $faker = Factory::create();
    for ($i=0; $i < 100 ; $i++) {
      $category = new Categorys();
      $category -> title = $faker -> word;
      $category -> position = 5;
      $category -> is_visible = 1;
      $category -> save(false);
    }
  }
}
