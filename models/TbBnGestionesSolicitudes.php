<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_gestiones_solicitudes".
 *
 * @property integer $CodigoGestion
 * @property integer $CodigoSolicitud
 * @property integer $CodigoEstado
 * @property string $Observaciones
 * @property string $SistemaUsuario
 * @property string $FechaSistema
 *
 * @property TbBnEstadoSolicitud $codigoEstado
 * @property TbBnSolicitudDescargo $codigoSolicitud
 */
class TbBnGestionesSolicitudes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_gestiones_solicitudes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoSolicitud', 'CodigoEstado'], 'required'],
            [['CodigoSolicitud', 'CodigoEstado'], 'integer'],
            [['Observaciones', 'SistemaUsuario'], 'string'],
            [['FechaSistema'], 'safe'],
            [['CodigoEstado'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEstadoSolicitud::className(), 'targetAttribute' => ['CodigoEstado' => 'CodigoEstado']],
            [['CodigoSolicitud'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnSolicitudDescargo::className(), 'targetAttribute' => ['CodigoSolicitud' => 'CodigoSolicitud']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoGestion' => 'Codigo Gestion',
            'CodigoSolicitud' => 'Codigo Solicitud',
            'CodigoEstado' => 'Codigo Estado',
            'Observaciones' => 'Observaciones',
            'SistemaUsuario' => 'Sistema Usuario',
            'FechaSistema' => 'Fecha Sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoEstado()
    {
        return $this->hasOne(TbBnEstadoSolicitud::className(), ['CodigoEstado' => 'CodigoEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoSolicitud()
    {
        return $this->hasOne(TbBnSolicitudDescargo::className(), ['CodigoSolicitud' => 'CodigoSolicitud']);
    }
}
