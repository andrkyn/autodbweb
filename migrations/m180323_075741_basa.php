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
                $tableOptions = null;
                if ($this->db->driverName === 'mysql') {
                   $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
                }

        /*$this->createTable('cars', [
            'id' => $this->primaryKey(),
            'category' => $this->integer(4)->notNull(),
            'name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull()->comment('имя серия'),
            'parent' => $this->integer()->notNull(),
            'price' => $this->string()->notNull(),
            'motor' => $this->string()->notNull(),
            'color' => $this->integer(4)->notNull(),
            'img' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
        ], $tableOptions);

        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent' => $this->integer()->notNull(),
            'img' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
        ], $tableOptions);

        $this->createIndex('category', 'cars', 'category');

        $this->addForeignKey(
            'fk-cars-category-categories-id',
            'cars', 'category',
            'categories', 'id',
            'SET NULL', 'CASCADE'
        );*/



        $this->createTable('cars', [
            'id' => $this->primaryKey(),
            'category' => $this->integer(4),
            'name' => $this->string(),
            'parent' => $this->integer(),
            'price' => $this->string(),
            'motor' => $this->string(),
            'color' => $this->integer(4),
            'img' => $this->string(),
            'description' => $this->text(),
        ], $tableOptions);

        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'parent' => $this->integer(),
            'img' => $this->string(),
            'description' => $this->text(),
        ], $tableOptions);

        $this->createIndex('category', 'cars', 'category');

        $this->addForeignKey(
            'fk-cars-category-categories-id',
            'cars', 'category',
            'categories', 'id',
            'SET NULL', 'CASCADE'
        );



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
