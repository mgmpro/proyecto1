<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuestionarios".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $categoria
 *
 * @property Preguntas[] $preguntas
 * @property UsuarioCuestionario[] $usuarioCuestionarios
 * 
 */
class Cuestionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuestionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 200],
            [['categoria'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'categoria' => 'Descripción',
        ];
    }

    /**
     * Gets query for [[Preguntas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreguntas()
    {
        return $this->hasMany(Preguntas::class, ['cuestionario_id' => 'id']);
    }

    /**
     * Gets query for [[UsuarioCuestionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioCuestionarios()
    {
        return $this->hasMany(UsuarioCuestionario::class, ['cuestionario_id' => 'id']);
    }
}
