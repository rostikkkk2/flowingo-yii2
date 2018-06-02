<?php

namespace app\commands;


use yii\console\Controller;
use app\models\Categorys;
use app\models\Goods;
use app\models\Recalls;
use Faker\Factory;


class SetupController extends Controller {
  public function actionIndex() {
    $faker = Factory::create();
    for ($i=0; $i < 5; $i++) {
      $category = new Categorys();
      $max_position = $category -> maxPosition();
      $category -> title = $faker -> word;
      $category -> position = ++$max_position;
      $category -> is_visible = 1;
      $category -> save(false);
    };
    for ($i=0; $i < 3; $i++) {
      $recall = new Recalls();
      $recall -> phone_number = $faker -> e164PhoneNumber;
      $recall -> save(false);
    }
    for ($i=0; $i < 20; $i++) {
      $goods = new Goods();
      $goods -> title = $faker -> company;
      $goods -> price = $faker -> randomNumber(1);
      $goods -> description = $faker -> realText;
      $goods -> photo_url = 'https://proglib.io/wp-content/uploads/2017/04/logo-php-adbac78231.png';
      $goods -> is_newing = 1;
      $goods -> is_top = 1;
      $goods -> is_visible = 1;
      $goods -> category_id = 1;
      $goods -> save(false);
    }
  }
}
