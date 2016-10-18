<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_solicitud_detalle".
 *
 * @property integer $CodigoDetalle
 * @property integer $CodigoSolicitud
 * @property integer $CodigoEquipo
 * @property string $FechaSistema
 * @property string $SistemaUsuario
 *
 * @property TbBnSolicitudDescargo $codigoSolicitud
 * @property TbBnEquipos $codigoEquipo
 */
class TbBnSolicitudDetalle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_solicitud_detalle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoSolicitud', 'CodigoEquipo'], 'required'],
            [['CodigoSolicitud', 'CodigoEquipo'], 'integer'],
            [['FechaSistema'], 'safe'],
            [['SistemaUsuario'], 'string'],
            [['CodigoSolicitud'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnSolicitudDescargo::className(), 'targetAttribute' => ['CodigoSolicitud' => 'CodigoSolicitud']],
            [['CodigoEquipo'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEquipos::className(), 'targetAttribute' => ['CodigoEquipo' => 'CodigoEquipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoDetalle' => 'Codigo Detalle',
            'CodigoSolicitud' => 'Codigo Solicitud',
            'CodigoEquipo' => 'Codigo Equipo',
            'FechaSistema' => 'Fecha Sistema',
            'SistemaUsuario' => 'Sistema Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoSolicitud()
    {
        return $this->hasOne(TbBnSolicitudDescargo::className(), ['CodigoSolicitud' => 'CodigoSolicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoEquipo()
    {
        return $this->hasOne(TbBnEquipos::className(), ['CodigoEquipo' => 'CodigoEquipo']);
    }
}
