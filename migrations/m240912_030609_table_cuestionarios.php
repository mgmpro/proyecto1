<?php

use yii\db\Migration;

/**
 * Class m240912_030609_table_cuestionarios
 */
class m240912_030609_table_cuestionarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cuestionarios', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(200),
            'categoria' => $this->string(100),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cuestionarios');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240912_030609_table_cuestionarios cannot be reverted.\n";

        return false;
    }
    */
}
