<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnTiposSolicitudes;

/**
 * TbBnTiposSolicitudesSearch represents the model behind the search form about `app\models\TbBnTiposSolicitudes`.
 */
class TbBnTiposSolicitudesSearch extends TbBnTiposSolicitudes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoTipoSolicitud'], 'integer'],
            [['TipoSolicitud'], 'safe'],
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
        $query = TbBnTiposSolicitudes::find();

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
            'codigoTipoSolicitud' => $this->codigoTipoSolicitud,
        ]);

        $query->andFilterWhere(['like', 'TipoSolicitud', $this->TipoSolicitud]);

        return $dataProvider;
    }
}
