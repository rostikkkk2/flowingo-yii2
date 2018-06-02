<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

  class Recalls extends ActiveRecord {
    public static function tableName() {
      return 'recalls';
    }

    public function rules() {
      return [
        [['phone_number'], 'integer'],
        [['datetime'], 'safe'],
      ];
    }

    public function attributeLabels() {
      return [
        'id' => 'ID',
        'phone_number' => 'Phone Number',
        'datetime' => 'Datetime',
      ];
    }
  }
