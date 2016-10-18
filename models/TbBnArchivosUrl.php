<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_archivos_url".
 *
 * @property integer $Codigo
 * @property integer $CodigoSolicitud
 * @property integer $codigoTipoSolicitud
 * @property string $Ruta
 * @property string $NombreDocumento
 * @property string $Formato
 *
 * @property TbBnSolicitudDescargo $codigoSolicitud
 * @property TbBnTiposSolicitudes $codigoTipoSolicitud0
 */
class TbBnArchivosUrl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_archivos_url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoSolicitud', 'codigoTipoSolicitud'], 'required'],
            [['CodigoSolicitud', 'codigoTipoSolicitud'], 'integer'],
            [['Ruta', 'NombreDocumento', 'Formato'], 'string'],
            [['CodigoSolicitud'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnSolicitudDescargo::className(), 'targetAttribute' => ['CodigoSolicitud' => 'CodigoSolicitud']],
            [['codigoTipoSolicitud'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnTiposSolicitudes::className(), 'targetAttribute' => ['codigoTipoSolicitud' => 'codigoTipoSolicitud']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo' => 'Codigo',
            'CodigoSolicitud' => 'Codigo Solicitud',
            'codigoTipoSolicitud' => 'Codigo Tipo Solicitud',
            'Ruta' => 'Ruta',
            'NombreDocumento' => 'Nombre Documento',
            'Formato' => 'Formato',
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
    public function getCodigoTipoSolicitud0()
    {
        return $this->hasOne(TbBnTiposSolicitudes::className(), ['codigoTipoSolicitud' => 'codigoTipoSolicitud']);
    }
}
