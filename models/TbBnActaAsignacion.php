<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_acta_asignacion".
 *
 * @property integer $CodigoActaAsignacion
 * @property integer $id
 * @property string $SistemaUsuario
 * @property string $FechaSistema
 * @property integer $CodigoInspector
 *
 * @property User $id0
 * @property TbBnDetalleActaAsignacion[] $tbBnDetalleActaAsignacions
 */
class TbBnActaAsignacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_acta_asignacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'CodigoInspector'], 'required'],
            [['id', 'CodigoInspector'], 'integer'],
            [['SistemaUsuario'], 'string'],
            [['FechaSistema'], 'safe'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoActaAsignacion' => 'Codigo Acta Asignacion',
            'id' => 'ID',
            'SistemaUsuario' => 'Sistema Usuario',
            'FechaSistema' => 'Fecha Sistema',
            'CodigoInspector' => 'Codigo Inspector',
        ];
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
    public function getTbBnDetalleActaAsignacions()
    {
        return $this->hasMany(TbBnDetalleActaAsignacion::className(), ['CodigoActaAsignacion' => 'CodigoActaAsignacion']);
    }
}
