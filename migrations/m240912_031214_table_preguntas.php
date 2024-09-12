<?php

use yii\db\Migration;

/**
 * Class m240912_031214_table_preguntas
 */
class m240912_031214_table_preguntas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('preguntas', [
            'id' => $this->primaryKey(),
            'enunciado' => $this->string(1000),
            'alternativa1' => $this->string(200),
            'alternativa2' => $this->string(200),
            'alternativa3' => $this->string(200),
            'alternativa4' => $this->string(200),
            'alternativacorrecta' => $this->string(200),
            'cuestionario_id' => $this->integer(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

        $this->addForeignKey('fk_preguntas_cuestionarios', 'preguntas', 'cuestionario_id', 'cuestionarios','id', 'RESTRICT', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('preguntas');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240912_031214_table_preguntas cannot be reverted.\n";

        return false;
    }
    */
}
