<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnGestionesSolicitudes;

/**
 * TbBnGestionesSolicitudesSearch represents the model behind the search form about `app\models\TbBnGestionesSolicitudes`.
 */
class TbBnGestionesSolicitudesSearch extends TbBnGestionesSolicitudes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoGestion', 'CodigoSolicitud', 'CodigoEstado'], 'integer'],
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
        $query = TbBnGestionesSolicitudes::find();

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
            'CodigoGestion' => $this->CodigoGestion,
            'CodigoSolicitud' => $this->CodigoSolicitud,
            'CodigoEstado' => $this->CodigoEstado,
            'FechaSistema' => $this->FechaSistema,
        ]);

        $query->andFilterWhere(['like', 'Observaciones', $this->Observaciones])
            ->andFilterWhere(['like', 'SistemaUsuario', $this->SistemaUsuario]);

        return $dataProvider;
    }
}
