<?php

use yii\db\Migration;

/**
 * Class m180323_075741_basa
 */
class m180323_075741_basa extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('cars', [
            'id' => $this->primaryKey(),
            'category' => $this->integer(4)->notNull(),
            'name' => $this->string()->notNull(),
            'parent' => $this->integer()->notNull(),
            'price' => $this->string()->notNull(),
            'motor' => $this->string()->notNull(),
            'color' => $this->integer(4)->notNull(),
            'img' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent' => $this->integer()->notNull(),
            'img' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
        ]);



    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180323_075741_basa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180323_075741_basa cannot be reverted.\n";

        return false;
    }
    */
}
