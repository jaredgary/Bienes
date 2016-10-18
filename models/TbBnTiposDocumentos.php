<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_tipos_documentos".
 *
 * @property integer $CodigoTipoDoc
 * @property string $TipoDocumento
 *
 * @property TbBnEquipos[] $tbBnEquipos
 */
class TbBnTiposDocumentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_tipos_documentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoDocumento'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoTipoDoc' => 'Codigo Tipo Doc',
            'TipoDocumento' => 'Tipo Documento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnEquipos()
    {
        return $this->hasMany(TbBnEquipos::className(), ['CodigoTipoDoc' => 'CodigoTipoDoc']);
    }
}
