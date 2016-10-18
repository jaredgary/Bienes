<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnActaDescargo;

/**
 * TbBnActaDescargoSearch represents the model behind the search form about `app\models\TbBnActaDescargo`.
 */
class TbBnActaDescargoSearch extends TbBnActaDescargo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoActaDescargo', 'id', 'Inspector'], 'integer'],
            [['Observaciones', 'SistemaUsuario', 'FechaSistema'], 'safe'],
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
        $query = TbBnActaDescargo::find();

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
            'CodigoActaDescargo' => $this->CodigoActaDescargo,
            'id' => $this->id,
            'Inspector' => $this->Inspector,
            'FechaSistema' => $this->FechaSistema,
        ]);

        $query->andFilterWhere(['like', 'Observaciones', $this->Observaciones])
            ->andFilterWhere(['like', 'SistemaUsuario', $this->SistemaUsuario]);

        return $dataProvider;
    }
}
