<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_estado_solicitud".
 *
 * @property integer $CodigoEstado
 * @property string $Estado
 *
 * @property TbBnGestionesSolicitudes[] $tbBnGestionesSolicitudes
 */
class TbBnEstadoSolicitud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_estado_solicitud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Estado'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoEstado' => 'Codigo Estado',
            'Estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnGestionesSolicitudes()
    {
        return $this->hasMany(TbBnGestionesSolicitudes::className(), ['CodigoEstado' => 'CodigoEstado']);
    }
}
