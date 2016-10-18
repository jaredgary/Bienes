<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnEstadoEquipo;

/**
 * TbBnEstadoEquipoSearch represents the model behind the search form about `app\models\TbBnEstadoEquipo`.
 */
class TbBnEstadoEquipoSearch extends TbBnEstadoEquipo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoEstadoEquipo'], 'integer'],
            [['EstadoEquipo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = TbBnEstadoEquipo::find();

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
            'CodigoEstadoEquipo' => $this->CodigoEstadoEquipo,
        ]);

        $query->andFilterWhere(['like', 'EstadoEquipo', $this->EstadoEquipo]);

        return $dataProvider;
    }
}
