<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\RegistrationForm;
use app\models\User;
use app\models\LoginForm;
use yii\filters\AccessControl;
use Yii;

  class UserController extends Controller {


    public function actionAuthByToken($token){
      $user = User::findOne(['auth_token' => $token]);
      $user -> is_confirmed = 1;
      $user -> save();
      Yii::$app -> user -> login($user);
      return $this -> goHome();
    }

    public function behaviors(){
      return [
        'access' => [
          'class' => AccessControl::className(),
          'only' => ['new', 'create', 'enter', 'singin', 'logout'],
          'rules' => [
            [
              'allow' => true,
              'actions' => ['new', 'create', 'enter', 'singin'],
              'roles' => ['?']
            ],
            [
              'allow' => true,
              'actions' => ['logout'],
              'roles' => ['@']
            ]
          ]
        ]
      ];
    }

    public function actionNew(){
      $model = new RegistrationForm;
      return $this -> render('registration', compact('model'));
    }


    public function actionCreate(){
      $model = new RegistrationForm;
      $model -> load(Yii::$app -> request -> post());
      if ($model -> registrate()) {
        $user = User::findByEmail($model -> email);

        Yii::$app -> session -> setFlash('success', 'вы успешно зареганы');
        Yii::$app -> mail -> compose('layouts/registration', [
          'user_info' => $model,
          'token' => $user -> auth_token,
        ])
           ->setFrom(Yii::$app -> params['sendEmail'])
           ->setTo($model -> email)
           ->setSubject('Thank you for registration')
           ->send();
        return $this -> goHome();
      }else {
        Yii::$app -> session -> setFlash('error', 'вы noooooooo зареганы');
        return $this -> render('registration', compact('model'));
      }
    }

    public function actionEnter(){
      $model = new LoginForm;
      return $this -> render('enter', compact('model'));

    }

    public function actionLogout(){
      Yii::$app -> user -> logout();
      Yii::$app -> session -> setFlash('success', 'dfksd;lfsd');
      return $this -> goHome();
    }

    public function actionSignin(){
      $model = new LoginForm;
      $model -> load(Yii::$app -> request -> post());
      if ($model -> login()) {

        Yii::$app -> session -> setFlash('success', 'вы успешно authorise');
        return $this -> goHome();
      }else {
        Yii::$app -> session -> setFlash('error', 'вы noooooooo authorise');
        return $this -> render('enter', compact('model'));
      }
    }

  }
