<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

class Categorys extends ActiveRecord {
  public $categorys;

    public static function tableName() {
        return 'categorys';
    }

    public function rules() {
        return [
            [['title', 'position'], 'required'],
            [['position'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 40],
            [['is_visible'], 'string', 'max' => 1],
            [['title'], 'unique'],
            [['title'], 'trim'],
            [['position'], 'unique'],
        ];
    }

    public static function maxPosition() {
      return self::find() -> max('position');
    }

    public static function AllCategorys() {
      return self::find() -> all();
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'position' => 'Position',
            'is_visible' => 'Is Visible',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getGoods() {
        return $this->hasMany(Goods::className(), ['category_id' => 'id']);
    }
}
