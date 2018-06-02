<?php

  namespace app\models;

  use Yii;
  use yii\base\Model;
  use app\models\User;

  class RegistrationForm extends Model {
    public $email;
    public $password;
    public $confirm_password;
    public $name;
    public $surname;



    public function rules(){
      return [
        ['email', 'email'],
        [['password','email','confirm_password'], 'required'],
        ['email', 'unique', 'targetClass' => '\app\models\User'],
        ['confirm_password', 'compare', 'compareAttribute' => 'password'],
        [['name','surname', 'auth_token'], 'safe']
      ];
    }

    public function registrate(){
      if ($this -> validate()) {
        $user = new User;
        $user -> email = $this -> email;
        $user -> password = Yii::$app -> getSecurity() -> generatePasswordHash($this -> password);
        $user -> auth_token = Yii::$app -> getSecurity() -> generateRandomString(32);
        $user -> name = $this -> name;
        $user -> surname = $this -> surname;
        $user -> save();
        return true;
      }
    }
  }
