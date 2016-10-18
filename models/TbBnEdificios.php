<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_edificios".
 *
 * @property integer $CodigoEdificio
 * @property string $NombreEdificio
 * @property string $DireccionEdificio
 *
 * @property TbBnDetalleActaAsignacion[] $tbBnDetalleActaAsignacions
 * @property TbBnEquipos[] $tbBnEquipos
 */
class TbBnEdificios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_edificios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreEdificio', 'DireccionEdificio'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoEdificio' => 'Codigo Edificio',
            'NombreEdificio' => 'Nombre Edificio',
            'DireccionEdificio' => 'Direccion Edificio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnDetalleActaAsignacions()
    {
        return $this->hasMany(TbBnDetalleActaAsignacion::className(), ['CodigoEdificio' => 'CodigoEdificio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnEquipos()
    {
        return $this->hasMany(TbBnEquipos::className(), ['CodigoEdificio' => 'CodigoEdificio']);
    }
}
