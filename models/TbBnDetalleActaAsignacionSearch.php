<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnDetalleActaAsignacion;

/**
 * TbBnDetalleActaAsignacionSearch represents the model behind the search form about `app\models\TbBnDetalleActaAsignacion`.
 */
class TbBnDetalleActaAsignacionSearch extends TbBnDetalleActaAsignacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoDetalleActaAsignacion', 'CodigoActaAsignacion', 'CodigoDepartamento', 'CodigoEdificio', 'CodigoEstadoEquipo'], 'integer'],
            [['CodigoEquipo', 'Telefono', 'Piso'], 'safe'],
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
        $query = TbBnDetalleActaAsignacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith('codigoEquipo');

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'CodigoDetalleActaAsignacion' => $this->CodigoDetalleActaAsignacion,
            'CodigoActaAsignacion' => $this->CodigoActaAsignacion,
            'CodigoDepartamento' => $this->CodigoDepartamento,
            'CodigoEdificio' => $this->CodigoEdificio,
            'CodigoEstadoEquipo' => $this->CodigoEstadoEquipo,
        ]);

        $query->andFilterWhere(['like', 'Telefono', $this->Telefono])
            ->andFilterWhere(['like', 'Piso', $this->Piso])
            ->andFilterWhere(['like', 'tb_bn_equipos.DescripcionEquipo', $this->CodigoEquipo]);

        return $dataProvider;
    }
}
