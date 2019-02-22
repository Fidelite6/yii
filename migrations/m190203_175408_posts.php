<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190203_175408_posts
 */
class m190203_175408_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
//    public function safeUp()
//    {
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function safeDown()
//    {

//    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('posts');
    }

}
