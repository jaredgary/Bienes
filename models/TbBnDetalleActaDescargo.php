<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_detalle_acta_descargo".
 *
 * @property integer $CodigoDetalleActaDescargo
 * @property integer $CodigoActaDescargo
 * @property integer $CodigoDetalleActaAsignacion
 * @property integer $CodigoEquipo
 * @property integer $CodigoActaAsignacion
 * @property integer $CodigoEstadoEquipo
 *
 * @property TbBnActaDescargo $codigoActaDescargo
 * @property TbBnDetalleActaAsignacion $codigoDetalleActaAsignacion
 */
class TbBnDetalleActaDescargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_detalle_acta_descargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoActaDescargo', 'CodigoDetalleActaAsignacion', 'CodigoEquipo', 'CodigoActaAsignacion', 'CodigoEstadoEquipo'], 'required'],
            [['CodigoActaDescargo', 'CodigoDetalleActaAsignacion', 'CodigoEquipo', 'CodigoActaAsignacion', 'CodigoEstadoEquipo'], 'integer'],
            [['CodigoActaDescargo'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnActaDescargo::className(), 'targetAttribute' => ['CodigoActaDescargo' => 'CodigoActaDescargo']],
            [['CodigoDetalleActaAsignacion'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnDetalleActaAsignacion::className(), 'targetAttribute' => ['CodigoDetalleActaAsignacion' => 'CodigoDetalleActaAsignacion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoDetalleActaDescargo' => 'Codigo Detalle Acta Descargo',
            'CodigoActaDescargo' => 'Codigo Acta Descargo',
            'CodigoDetalleActaAsignacion' => 'Codigo Detalle Acta Asignacion',
            'CodigoEquipo' => 'Codigo Equipo',
            'CodigoActaAsignacion' => 'Codigo Acta Asignacion',
            'CodigoEstadoEquipo' => 'Codigo Estado Equipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoActaDescargo()
    {
        return $this->hasOne(TbBnActaDescargo::className(), ['CodigoActaDescargo' => 'CodigoActaDescargo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoDetalleActaAsignacion()
    {
        return $this->hasOne(TbBnDetalleActaAsignacion::className(), ['CodigoDetalleActaAsignacion' => 'CodigoDetalleActaAsignacion']);
    }
}
