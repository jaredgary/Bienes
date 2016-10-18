<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnDetalleActaDescargo;

/**
 * TbBnDetalleActaDescargoSearch represents the model behind the search form about `app\models\TbBnDetalleActaDescargo`.
 */
class TbBnDetalleActaDescargoSearch extends TbBnDetalleActaDescargo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoDetalleActaDescargo', 'CodigoActaDescargo', 'CodigoDetalleActaAsignacion', 'CodigoEquipo', 'CodigoActaAsignacion', 'CodigoEstadoEquipo'], 'integer'],
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
        $query = TbBnDetalleActaDescargo::find();

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
            'CodigoDetalleActaDescargo' => $this->CodigoDetalleActaDescargo,
            'CodigoActaDescargo' => $this->CodigoActaDescargo,
            'CodigoDetalleActaAsignacion' => $this->CodigoDetalleActaAsignacion,
            'CodigoEquipo' => $this->CodigoEquipo,
            'CodigoActaAsignacion' => $this->CodigoActaAsignacion,
            'CodigoEstadoEquipo' => $this->CodigoEstadoEquipo,
        ]);

        return $dataProvider;
    }
}
