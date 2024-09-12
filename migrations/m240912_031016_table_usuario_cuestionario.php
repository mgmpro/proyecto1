<?php

use yii\db\Migration;

/**
 * Class m240912_031016_table_usuario_cuestionario
 */
class m240912_031016_table_usuario_cuestionario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario_cuestionario', [
            'usuario_id' => $this->integer(),
            'cuestionario_id' => $this->integer(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

        $this->addForeignKey('fk_usuario_cuestionario_usuarios', 'usuario_cuestionario', 'usuario_id', 'usuarios','id');
        $this->addForeignKey('fk_usuario_cuestionario_cuestionarios', 'usuario_cuestionario', 'cuestionario_id', 'cuestionarios','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario_cuestionario');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240912_031016_table_usuario_cuestionario cannot be reverted.\n";

        return false;
    }
    */
}
