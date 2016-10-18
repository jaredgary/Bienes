<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_acciones".
 *
 * @property integer $codigoAC
 * @property string $DescripcionAC
 * @property integer $EstadoAC
 *
 * @property TbBnLog[] $tbBnLogs
 */
class TbBnAcciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_acciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DescripcionAC'], 'string'],
            [['EstadoAC'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigoAC' => 'Codigo Ac',
            'DescripcionAC' => 'Descripcion Ac',
            'EstadoAC' => 'Estado Ac',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnLogs()
    {
        return $this->hasMany(TbBnLog::className(), ['codigoAC' => 'codigoAC']);
    }
}
