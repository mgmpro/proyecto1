<?php

namespace app\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pregunta;

/**
 * PreguntaSearchs represents the model behind the search form of `app\models\Pregunta`.
 */
class PreguntaSearchs extends Pregunta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cuestionario_id'], 'integer'],
            [['enunciado', 'alternativa1', 'alternativa2', 'alternativa3', 'alternativa4', 'alternativacorrecta'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pregunta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cuestionario_id' => $this->cuestionario_id,
        ]);

        $query->andFilterWhere(['like', 'enunciado', $this->enunciado])
            ->andFilterWhere(['like', 'alternativa1', $this->alternativa1])
            ->andFilterWhere(['like', 'alternativa2', $this->alternativa2])
            ->andFilterWhere(['like', 'alternativa3', $this->alternativa3])
            ->andFilterWhere(['like', 'alternativa4', $this->alternativa4])
            ->andFilterWhere(['like', 'alternativacorrecta', $this->alternativacorrecta]);

        return $dataProvider;
    }
}
