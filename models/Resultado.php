<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultados".
 *
 * @property int $id
 * @property string|null $fecha
 * @property float|null $porcentajecorrectas
 * @property string|null $situacion
 * @property int|null $usuario_id
 * @property string|null $categoria
 *
 * @property Usuario $usuario
 */
class Resultado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resultados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['porcentajecorrectas'], 'number'],
            [['usuario_id'], 'integer'],
            [['fecha', 'situacion'], 'string', 'max' => 200],
            [['categoria'], 'string', 'max' => 100],
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
            'fecha' => 'Fecha',
            'porcentajecorrectas' => 'Porcentajecorrectas',
            'situacion' => 'Situacion',
            'usuario_id' => 'Usuario ID',
            'categoria' => 'Categoria',
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
