<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnArchivosUrl;

/**
 * TbBnArchivosUrlSearch represents the model behind the search form about `app\models\TbBnArchivosUrl`.
 */
class TbBnArchivosUrlSearch extends TbBnArchivosUrl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo', 'CodigoSolicitud'], 'integer'],
            [['codigoTipoSolicitud', 'Ruta', 'NombreDocumento', 'Formato'], 'safe'],
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
        $query = TbBnArchivosUrl::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith('codigoTipoSolicitud0');

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Codigo' => $this->Codigo,
            'CodigoSolicitud' => $this->CodigoSolicitud,
        ]);

        $query->andFilterWhere(['like', 'Ruta', $this->Ruta])
            ->andFilterWhere(['like', 'NombreDocumento', $this->NombreDocumento])
            ->andFilterWhere(['like', 'Formato', $this->Formato])
            ->andFilterWhere(['like', 'tb_bn_tipos_solicitudes.TipoSolicitud', $this->codigoTipoSolicitud]);

        return $dataProvider;
    }
}
