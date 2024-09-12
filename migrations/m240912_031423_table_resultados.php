<?php

use yii\db\Migration;

/**
 * Class m240912_031423_table_resultados
 */
class m240912_031423_table_resultados extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('resultados', [
            'id' => $this->primaryKey(),
            'fecha' => $this->string(200),
            'porcentajecorrectas' => $this->float(100),
            'situacion' => $this->string(200),
            'usuario_id' => $this->integer(),
	        'categoria' => $this->string(100),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

        $this->addForeignKey('fk_resultados_usuarios', 'resultados', 'usuario_id', 'usuarios','id', 'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('resultados');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240912_031423_table_resultados cannot be reverted.\n";

        return false;
    }
    */
}
