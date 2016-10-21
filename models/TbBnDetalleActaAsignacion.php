<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_detalle_acta_asignacion".
 *
 * @property integer $CodigoDetalleActaAsignacion
 * @property integer $CodigoActaAsignacion
 * @property integer $CodigoEquipo
 * @property integer $CodigoDepartamento
 * @property string $Telefono
 * @property string $Piso
 * @property integer $CodigoEdificio
 * @property integer $CodigoEstadoEquipo
 *
 * @property TbBnActaAsignacion $codigoActaAsignacion
 * @property TbBnEdificios $codigoEdificio
 * @property TbBnEquipos $codigoEquipo
 * @property TbBnDetalleActaDescargo[] $tbBnDetalleActaDescargos
 */
class TbBnDetalleActaAsignacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_detalle_acta_asignacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoActaAsignacion', 'CodigoEquipo', 'CodigoDepartamento', 'CodigoEdificio', 'CodigoEstadoEquipo'], 'required'],
            [['CodigoActaAsignacion', 'CodigoEquipo', 'CodigoDepartamento', 'CodigoEdificio', 'CodigoEstadoEquipo'], 'integer'],
            [['Telefono', 'Piso'], 'string'],
            [['CodigoActaAsignacion'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnActaAsignacion::className(), 'targetAttribute' => ['CodigoActaAsignacion' => 'CodigoActaAsignacion']],
            [['CodigoEdificio'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEdificios::className(), 'targetAttribute' => ['CodigoEdificio' => 'CodigoEdificio']],
            [['CodigoEquipo'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEquipos::className(), 'targetAttribute' => ['CodigoEquipo' => 'CodigoEquipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoDetalleActaAsignacion' => 'Codigo Detalle Acta Asignacion',
            'CodigoActaAsignacion' => 'Acta de Asignacion',
            'CodigoEquipo' => 'Equipo',
            'CodigoDepartamento' => 'Departamento',
            'Telefono' => 'Telefono',
            'Piso' => 'Piso',
            'CodigoEdificio' => 'Edificio',
            'CodigoEstadoEquipo' => 'Estado del Equipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoActaAsignacion()
    {
        return $this->hasOne(TbBnActaAsignacion::className(), ['CodigoActaAsignacion' => 'CodigoActaAsignacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoEdificio()
    {
        return $this->hasOne(TbBnEdificios::className(), ['CodigoEdificio' => 'CodigoEdificio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoEquipo()
    {
        return $this->hasOne(TbBnEquipos::className(), ['CodigoEquipo' => 'CodigoEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnDetalleActaDescargos()
    {
        return $this->hasMany(TbBnDetalleActaDescargo::className(), ['CodigoDetalleActaAsignacion' => 'CodigoDetalleActaAsignacion']);
    }
}
