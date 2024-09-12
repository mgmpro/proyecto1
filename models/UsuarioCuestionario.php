<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_cuestionario".
 *
 * @property int|null $usuario_id
 * @property int|null $cuestionario_id
 *
 * @property Cuestionarios $cuestionario
 * @property Usuarios $usuario
 */
class UsuarioCuestionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario_cuestionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'cuestionario_id'], 'integer'],
            [['cuestionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cuestionarios::class, 'targetAttribute' => ['cuestionario_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'cuestionario_id' => 'Cuestionario ID',
        ];
    }

    /**
     * Gets query for [[Cuestionario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuestionario()
    {
        return $this->hasOne(Cuestionarios::class, ['id' => 'cuestionario_id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'usuario_id']);
    }
}
