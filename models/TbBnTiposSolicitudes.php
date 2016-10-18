<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_tipos_solicitudes".
 *
 * @property integer $codigoTipoSolicitud
 * @property string $TipoSolicitud
 *
 * @property TbBnArchivosUrl[] $tbBnArchivosUrls
 */
class TbBnTiposSolicitudes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_tipos_solicitudes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoSolicitud'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigoTipoSolicitud' => 'Codigo Tipo Solicitud',
            'TipoSolicitud' => 'Tipo Solicitud',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnArchivosUrls()
    {
        return $this->hasMany(TbBnArchivosUrl::className(), ['codigoTipoSolicitud' => 'codigoTipoSolicitud']);
    }
}
