<?php

use yii\db\Migration;


class m180501_083204_change_password_column_table extends Migration{

  public function safeUp() {
        $this -> addColumn('users', 'auth_token', $this -> string());
        $this -> addColumn('users', 'is_confirmed', $this -> boolean() -> defaultValue(0));
      }

      public function safeDown() {
        $this -> dropColumn('users', 'auth_token');
        $this -> dropColumn('users', 'is_confirmed');
      }
}
