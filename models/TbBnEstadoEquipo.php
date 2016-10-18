<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_estado_equipo".
 *
 * @property integer $CodigoEstadoEquipo
 * @property string $EstadoEquipo
 *
 * @property TbBnEquipos[] $tbBnEquipos
 */
class TbBnEstadoEquipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_estado_equipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EstadoEquipo'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoEstadoEquipo' => 'Codigo Estado Equipo',
            'EstadoEquipo' => 'Estado Equipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnEquipos()
    {
        return $this->hasMany(TbBnEquipos::className(), ['CodigoEstadoEquipo' => 'CodigoEstadoEquipo']);
    }
}
