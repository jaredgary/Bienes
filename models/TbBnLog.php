<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_log".
 *
 * @property integer $codigoLog
 * @property integer $codigoAC
 * @property integer $id
 * @property string $descripcion
 * @property string $SistemaUsuario
 * @property string $fecha
 *
 * @property TbBnAcciones $codigoAC0
 * @property User $id0
 */
class TbBnLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoAC', 'id'], 'required'],
            [['codigoAC', 'id'], 'integer'],
            [['descripcion', 'SistemaUsuario'], 'string'],
            [['fecha'], 'safe'],
            [['codigoAC'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnAcciones::className(), 'targetAttribute' => ['codigoAC' => 'codigoAC']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigoLog' => 'Codigo Log',
            'codigoAC' => 'Codigo Ac',
            'id' => 'ID',
            'descripcion' => 'Descripcion',
            'SistemaUsuario' => 'Sistema Usuario',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoAC0()
    {
        return $this->hasOne(TbBnAcciones::className(), ['codigoAC' => 'codigoAC']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
