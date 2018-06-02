<?php

use yii\db\Migration;

class m180417_173254_create_users_table extends Migration {
  public function safeUp() {
      $this->createTable('users', [
          'id' => $this -> primaryKey(),
          'email' => $this -> string(40) -> unique() -> notNull(),
          'password' => $this -> string(40) -> notNull(),
          'name' => $this -> string(40),
          'surname' => $this -> string(40),
          'is_admin' => $this -> boolean() -> defaultValue(0)
      ]);
  }

    public function safeDown() {
        $this->dropTable('users');
    }
}
