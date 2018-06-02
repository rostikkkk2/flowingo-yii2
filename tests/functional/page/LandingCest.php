<?php

class LandingCest {
  public function _before(\FunctionalTester $I){
    $I->amOnPage(Yii::$app->getUrlManager()->createUrl('').'page/landing');
  }

  public function iSeeEnterAndRegistration(\FunctionalTester $I){
      $I->see('Регистрация');
      $I->see('Вход');
  }

  public function iSeeTopAndNewAndNews(\FunctionalTester $I)
  {
      $I->see('Top');
      $I->see('New');
      $I->see('Новости');

  }

  public function iSeeMenuNav(\FunctionalTester $I)
  {
      $I->see('О нас', ['css' => 'a']);
      $I->see('Цветы', ['css' => 'a']);
      $I->see('Доставка', ['css' => 'a']);
      $I->see('Оплата', ['css' => 'a']);
      $I->see('Вопросы', ['css' => 'a']);
      $I->see('Контакты', ['css' => 'a']);



  }
}
