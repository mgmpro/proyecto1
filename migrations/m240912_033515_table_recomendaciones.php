<?php

use yii\db\Migration;

/**
 * Class m240912_033515_table_recomendaciones
 */
class m240912_033515_table_recomendaciones extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('recomendaciones', [
            'id' => $this->primaryKey(),
            'texto' => $this->string(1000),
            'fecha' => $this->string(200),
            'usuario_id' => $this->integer(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

        $this->addForeignKey('fk_recomendaciones_usuarios', 'recomendaciones', 'usuario_id', 'usuarios','id', 'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('recomendaciones');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240912_033515_table_recomendaciones cannot be reverted.\n";

        return false;
    }
    */
}
