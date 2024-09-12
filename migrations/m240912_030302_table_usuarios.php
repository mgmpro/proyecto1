<?php

use yii\db\Migration;

/**
 * Class m240912_030302_table_usuarios
 */
class m240912_030302_table_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuarios', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(200),
            'username' => $this->string(200),
            'email' => $this->string(200),
            'password' => $this->String(200),
            'rol' => $this->String(100),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');    


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240912_030302_table_usuarios cannot be reverted.\n";

        $this->dropTable('usuarios');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240912_030302_table_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
