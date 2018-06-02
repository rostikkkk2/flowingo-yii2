<?php

use yii\db\Migration;

class m180424_155632_add_foreign_key_to_goods extends Migration
{
  public function safeUp() {
      $this -> addColumn('goods', 'category_id', $this -> integer() -> notNull());


      $this -> addForeignKey(
            'categoryId',
            'goods',
            'category_id',
            'categorys',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    public function safeDown() {
      $this -> dropForeignKey(
        'categoryId',
        'goods'
      );

      $this -> dropColumn('goods', 'category_id');
    }
}
