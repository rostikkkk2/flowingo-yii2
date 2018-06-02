<?php
  namespace app\models;

  use yii\base\Model;

  class CreateCategoryForm extends Model {
    public $title;
    public $is_visible;
    public $position;
    
    public function rules() {
      return [
        ['title', 'required', 'message' => 'hello'],
        ['title', 'trim'],
        ['position', 'integer'],
      ];
    }

    public function attributeLabels() {
      return [
        'title' => 'Название категории',
        'is_visible' => 'Активная?',
        'position' => 'Позиция'
      ];
    }
  }

?>
