<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbBnLog;

/**
 * TbBnLogSearch represents the model behind the search form about `app\models\TbBnLog`.
 */
class TbBnLogSearch extends TbBnLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoLog', 'codigoAC', 'id'], 'integer'],
            [['descripcion', 'SistemaUsuario', 'fecha'], 'safe'],
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
        $query = TbBnLog::find();

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
            'codigoLog' => $this->codigoLog,
            'codigoAC' => $this->codigoAC,
            'id' => $this->id,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'SistemaUsuario', $this->SistemaUsuario]);

        return $dataProvider;
    }
}
