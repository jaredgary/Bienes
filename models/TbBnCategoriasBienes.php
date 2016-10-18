<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_categorias_bienes".
 *
 * @property integer $CodigoCategoria
 * @property string $Categoria
 * @property string $FechaSistema
 * @property string $SistemaUsuario
 *
 * @property TbBnEquipos[] $tbBnEquipos
 */
class TbBnCategoriasBienes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_categorias_bienes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Categoria', 'SistemaUsuario'], 'string'],
            [['FechaSistema'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoCategoria' => 'Codigo Categoria',
            'Categoria' => 'Categoria',
            'FechaSistema' => 'Fecha Sistema',
            'SistemaUsuario' => 'Sistema Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnEquipos()
    {
        return $this->hasMany(TbBnEquipos::className(), ['CodigoCategoria' => 'CodigoCategoria']);
    }
}
