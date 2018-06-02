<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

  class News extends ActiveRecord {
    public static function tableName() {
      return 'news';
    }

    public static function allNews() {
      return self::find() -> all();
    }

    public function rules() {
      return [
        [['full_text', 'photo'], 'string'],
        [['created_at', 'updated_at', 'datetime'], 'safe'],
        [['short_description'], 'string', 'max' => 40],
      ];
    }

    public function attributeLabels() {
      return [
        'id' => 'ID',
        'short_description' => 'Short Description',
        'full_text' => 'Full Text',
        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
        'datetime' => 'Datetime',
        'photo' => 'Photo',
      ];
    }
  }
