<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_solicitud_descargo".
 *
 * @property integer $CodigoSolicitud
 * @property string $FechaSolicitud
 * @property integer $id
 * @property string $MotivoSolicitud
 * @property integer $Estado
 * @property string $SistemaFecha
 * @property string $SistemaUsuario
 *
 * @property TbBnArchivosUrl[] $tbBnArchivosUrls
 * @property TbBnGestionesSolicitudes[] $tbBnGestionesSolicitudes
 * @property User $id0
 * @property TbBnSolicitudDetalle[] $tbBnSolicitudDetalles
 */
class TbBnSolicitudDescargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_solicitud_descargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FechaSolicitud', 'SistemaFecha'], 'safe'],
            [['id'], 'required'],
            [['id', 'Estado'], 'integer'],
            [['MotivoSolicitud', 'SistemaUsuario'], 'string'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoSolicitud' => 'Codigo Solicitud',
            'FechaSolicitud' => 'Fecha Solicitud',
            'id' => 'ID',
            'MotivoSolicitud' => 'Motivo Solicitud',
            'Estado' => 'Estado',
            'SistemaFecha' => 'Sistema Fecha',
            'SistemaUsuario' => 'Sistema Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnArchivosUrls()
    {
        return $this->hasMany(TbBnArchivosUrl::className(), ['CodigoSolicitud' => 'CodigoSolicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnGestionesSolicitudes()
    {
        return $this->hasMany(TbBnGestionesSolicitudes::className(), ['CodigoSolicitud' => 'CodigoSolicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnSolicitudDetalles()
    {
        return $this->hasMany(TbBnSolicitudDetalle::className(), ['CodigoSolicitud' => 'CodigoSolicitud']);
    }
}
