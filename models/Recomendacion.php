<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recomendaciones".
 *
 * @property int $id
 * @property string|null $texto
 * @property string|null $fecha
 * @property int|null $usuario_id
 *
 * @property Usuario $usuario
 */
class Recomendacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recomendaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id'], 'integer'],
            [['texto'], 'string', 'max' => 1000],
            [['fecha'], 'string', 'max' => 200],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto' => 'Texto',
            'fecha' => 'Fecha',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'usuario_id']);
    }
}
