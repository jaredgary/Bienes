<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_acta_descargo".
 *
 * @property integer $CodigoActaDescargo
 * @property integer $id
 * @property integer $Inspector
 * @property string $Observaciones
 * @property string $SistemaUsuario
 * @property string $FechaSistema
 *
 * @property User $id0
 * @property TbBnDetalleActaDescargo[] $tbBnDetalleActaDescargos
 */
class TbBnActaDescargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_acta_descargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Inspector'], 'required'],
            [['id', 'Inspector'], 'integer'],
            [['Observaciones', 'SistemaUsuario'], 'string'],
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
            'CodigoActaDescargo' => 'Codigo Acta Descargo',
            'id' => 'ID',
            'Inspector' => 'Inspector',
            'Observaciones' => 'Observaciones',
            'SistemaUsuario' => 'Sistema Usuario',
            'FechaSistema' => 'Fecha Sistema',
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
    public function getTbBnDetalleActaDescargos()
    {
        return $this->hasMany(TbBnDetalleActaDescargo::className(), ['CodigoActaDescargo' => 'CodigoActaDescargo']);
    }
}
