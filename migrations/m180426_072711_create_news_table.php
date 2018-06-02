<?php

use yii\db\Migration;
use yii\db\Expression;

 class m180426_072711_create_news_table extends Migration {
   public function safeUp() {
     $this->createTable('news', [
       'id' => $this -> primaryKey(),
       'short_description' => $this -> string(40),
       'full_text' => $this -> text(1000),
       'created_at' => $this -> date('dd.mm.yyyy') -> defaultValue(date('y.m.d')),
       'updated_at' => $this -> date('dd.mm.yyyy') -> defaultValue(date('y.m.d')),
       'datetime' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
       'photo' => $this -> text(1000)
     ]);
   }

   public function safeDown() {
     $this->dropTable('news');
   }
 }
