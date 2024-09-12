<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preguntas".
 *
 * @property int $id
 * @property string|null $enunciado
 * @property string|null $alternativa1
 * @property string|null $alternativa2
 * @property string|null $alternativa3
 * @property string|null $alternativa4
 * @property string|null $alternativacorrecta
 * @property int|null $cuestionario_id
 *
 * @property Cuestionario $cuestionario
 */
class Pregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'preguntas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cuestionario_id'], 'integer'],
            [['enunciado'], 'string', 'max' => 1000],
            [['alternativa1', 'alternativa2', 'alternativa3', 'alternativa4', 'alternativacorrecta'], 'string', 'max' => 200],
            [['cuestionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cuestionario::class, 'targetAttribute' => ['cuestionario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enunciado' => 'Enunciado',
            'alternativa1' => 'Alternativa1',
            'alternativa2' => 'Alternativa2',
            'alternativa3' => 'Alternativa3',
            'alternativa4' => 'Alternativa4',
            'alternativacorrecta' => 'Alternativacorrecta',
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
        return $this->hasOne(Cuestionario::class, ['id' => 'cuestionario_id']);
    }
}
