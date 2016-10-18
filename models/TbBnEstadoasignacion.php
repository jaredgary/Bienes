<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_estadoasignacion".
 *
 * @property integer $CodigoEstadoAsignacion
 * @property string $EstadoAsignacion
 *
 * @property TbBnEquipos[] $tbBnEquipos
 */
class TbBnEstadoasignacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_estadoasignacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EstadoAsignacion'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoEstadoAsignacion' => 'Codigo Estado Asignacion',
            'EstadoAsignacion' => 'Estado Asignacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnEquipos()
    {
        return $this->hasMany(TbBnEquipos::className(), ['CodigoEstadoAsignacion' => 'CodigoEstadoAsignacion']);
    }
}
