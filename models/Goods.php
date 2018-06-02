<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

class Goods extends ActiveRecord {

  public static function tableName() {
    return 'goods';
  }

  public static function isTop(){
    return self::find() -> where(['is_visible' => 1, 'is_newing' => 1]) -> orderBy(['id' => SORT_DESC]) -> limit(8) -> all();
  }
  public static function isNew() {
    return self::find() -> where(['is_visible' => 1,'is_top' => 1]) -> orderBy(['id' => SORT_DESC]) -> limit(8) -> all();
  }

  public static function allGoods() {
    return self::find() -> orderBy(['created_at' => SORT_ASC]) -> all();
  }

  public function rules() {
    return [
      [['title', 'price', 'description', 'photo_url'], 'required'],
      [['price'], 'number'],
      [['description'], 'string'],
      [['category_id'], 'integer'],
      [['title'], 'string', 'max' => 50],
      [['photo_url'], 'string', 'max' => 100],
      [['is_newing', 'is_top', 'is_visible'], 'string', 'max' => 1],
      [['title'], 'unique'],
      [['title'], 'trim'],
      [['created_at'], 'safe'],
      [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categorys::className(), 'targetAttribute' => ['category_id' => 'id']],
    ];
  }

  public function attributeLabels() {
    return [
      'id' => 'ID',
      'title' => 'Title',
      'price' => 'Price',
      'description' => 'Description',
      'photo_url' => 'Photo Url',
      'is_newing' => 'Is Newing',
      'is_top' => 'Is Top',
      'is_visible' => 'Is Visible',
      'category_id' => 'Category ID',
    ];
  }

  public function getCategory() {
    return $this->hasOne(Categorys::className(), ['id' => 'category_id']);
  }
}
