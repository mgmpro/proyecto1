<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $username
 * @property string|null $email
 * @property string|null $password
 * @property string|null $rol
 *
 * @property Resultados[] $resultados
 * @property UsuarioCuestionario[] $usuarioCuestionarios
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'username', 'email', 'password'], 'string', 'max' => 200],
            [['rol'], 'string', 'max' => 100],
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
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'rol' => 'Rol',
        ];
    }

    /**
     * Gets query for [[Resultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultados::class, ['usuario_id' => 'id']);
    }

    /**
     * Gets query for [[UsuarioCuestionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioCuestionarios()
    {
        return $this->hasMany(UsuarioCuestionario::class, ['usuario_id' => 'id']);
    }
}
