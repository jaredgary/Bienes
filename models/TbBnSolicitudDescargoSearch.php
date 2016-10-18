<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnSolicitudDescargo;

/**
 * TbBnSolicitudDescargoSearch represents the model behind the search form about `app\models\TbBnSolicitudDescargo`.
 */
class TbBnSolicitudDescargoSearch extends TbBnSolicitudDescargo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoSolicitud', 'id', 'Estado'], 'integer'],
            [['FechaSolicitud', 'MotivoSolicitud', 'SistemaFecha', 'SistemaUsuario'], 'safe'],
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
        $query = TbBnSolicitudDescargo::find();

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
            'CodigoSolicitud' => $this->CodigoSolicitud,
            'FechaSolicitud' => $this->FechaSolicitud,
            'id' => $this->id,
            'Estado' => $this->Estado,
            'SistemaFecha' => $this->SistemaFecha,
        ]);

        $query->andFilterWhere(['like', 'MotivoSolicitud', $this->MotivoSolicitud])
            ->andFilterWhere(['like', 'SistemaUsuario', $this->SistemaUsuario]);

        return $dataProvider;
    }
}
