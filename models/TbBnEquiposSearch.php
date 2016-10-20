<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnEquipos;

/**
 * TbBnEquiposSearch represents the model behind the search form about `app\models\TbBnEquipos`.
 */
class TbBnEquiposSearch extends TbBnEquipos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoEquipo', 'CodigoCategoria', 'CodigoDepartamento', 'CodigoEdificio', 'CodigoTipoDoc', 'id', 'CodigoEstadoEquipo'], 'integer'],
            [['Fecha', 'NumeroInventario', 'DescripcionEquipo', 'Marca', 'SerieEquipo', 'Color', 'Telefono', 'Piso', 'NumeroDocumento', 'FechaDocumento', 'Observaciones', 'SistemaFecha', 'SistemaUsuario','CodigoEstadoAsignacion'], 'safe'],
            [['CostoUnitario'], 'number'],
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
        $query = TbBnEquipos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith('codigoEstadoAsignacion');

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'CodigoEquipo' => $this->CodigoEquipo,
            'Fecha' => $this->Fecha,
            'CodigoCategoria' => $this->CodigoCategoria,
            'CodigoDepartamento' => $this->CodigoDepartamento,
            'CodigoEdificio' => $this->CodigoEdificio,
            'CodigoTipoDoc' => $this->CodigoTipoDoc,
            'FechaDocumento' => $this->FechaDocumento,
            'CostoUnitario' => $this->CostoUnitario,
            'id' => $this->id,
            'CodigoEstadoEquipo' => $this->CodigoEstadoEquipo,
            'SistemaFecha' => $this->SistemaFecha,
        ]);

        $query->andFilterWhere(['like', 'NumeroInventario', $this->NumeroInventario])
            ->andFilterWhere(['like', 'DescripcionEquipo', $this->DescripcionEquipo])
            ->andFilterWhere(['like', 'Marca', $this->Marca])
            ->andFilterWhere(['like', 'SerieEquipo', $this->SerieEquipo])
            ->andFilterWhere(['like', 'Color', $this->Color])
            ->andFilterWhere(['like', 'Telefono', $this->Telefono])
            ->andFilterWhere(['like', 'Piso', $this->Piso])
            ->andFilterWhere(['like', 'NumeroDocumento', $this->NumeroDocumento])
            ->andFilterWhere(['like', 'Observaciones', $this->Observaciones])
            ->andFilterWhere(['like', 'SistemaUsuario', $this->SistemaUsuario])
            ->andFilterWhere(['like', 'tb_bn_estadoasignacion.EstadoAsignacion', $this->CodigoEstadoAsignacion]);

        return $dataProvider;
    }
}
