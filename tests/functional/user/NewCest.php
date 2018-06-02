<?php
use app\models\User;
class NewCest {

  public function _before(\FunctionalTester $I){
    $I->amOnPage(Yii::$app->getUrlManager()->createUrl('').'user/new');

  }


  public function submitFormWithIncorrectAll(\FunctionalTester $I){
        $I->submitForm('#registr', []);

        $I->expectTo('see that all inputs is wrong');

        $I->see('Необходимо заполнить «Email».');
        $I->see('Необходимо заполнить «Password»');
        $I->see('Необходимо заполнить «Confirm Password»');
      }

      public function submitFormWithIncorrectEmail(\FunctionalTester $I){
            $I->submitForm('#registr', [
              'RegistrationForm[email]' => 'rososo'
            ]);

            $I->expectTo('see that email is not email');

            $I->see('Значение «Email» не является правильным email адресом.');
          }


          public function submitFormWithIncorrectPasswordAndConfirmPassword(\FunctionalTester $I){
            $I->submitForm('#registr', [
              'RegistrationForm[password]' => '11',
              'RegistrationForm[confirm_password]' => '22'
            ]);

                $I->expectTo('see that password not how confirm_password');

                $I->see('Значение «Confirm Password» должно быть равно «Password»');
              }


    public function isUniqueUser(\FunctionalTester $I){
        $I->haveRecord('app\models\User', array('email' => 'denis@gm.com', 'password' => '123'));
        $I->submitForm('#registr', [
          'RegistrationForm[email]' => 'denis@gm.com',
        ]);
        User::deleteAll();

        $I->expectTo('see that that user was not created');

        $I->see('Значение «denis@gm.com» для «Email» уже занято.');
    }


    public function isSuccessCreated(\FunctionalTester $I){
      $I->submitForm('#registr', [
        'RegistrationForm[email]' => 'deni@gmail.com',
        'RegistrationForm[password]' => '11',
        'RegistrationForm[confirm_password]' => '11'
      ]);
        $I->seeRecord('app\models\User', array('email' => 'deni@gmail.com'));
        User::deleteAll();
        $I->seeCurrentUrlEquals('/');

        $I->expectTo('success confirm');

        $I->see('вы успешно зареганы');
    }
}
