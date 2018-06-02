<?php

use yii\db\Migration;
use yii\db\Expression;

class m180417_174344_create_goods_table extends Migration {
    public function safeUp() {
        $this->createTable('goods', [
          'id' => $this->primaryKey(),
          'title' => $this -> string(50) -> unique() -> notNull(),
          'price' => $this-> decimal(8,2) -> notNull(),
          'description' => $this -> text(1000) -> notNull(),
          'photo_url' => $this -> string(255) -> notNull(),
          'is_newing' => $this -> boolean() -> defaultValue(false),
          'is_top' => $this -> boolean() -> defaultValue(false),
          'is_visible' => $this -> boolean() -> defaultValue(true),
          'created_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
        ]);
    }

    public function safeDown() {
        $this->dropTable('goods');
    }
}
