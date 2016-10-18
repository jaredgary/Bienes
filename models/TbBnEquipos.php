<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bn_equipos".
 *
 * @property integer $CodigoEquipo
 * @property string $Fecha
 * @property string $NumeroInventario
 * @property integer $CodigoCategoria
 * @property string $DescripcionEquipo
 * @property string $Marca
 * @property string $SerieEquipo
 * @property string $Color
 * @property integer $CodigoDepartamento
 * @property string $Telefono
 * @property string $Piso
 * @property integer $CodigoEdificio
 * @property integer $CodigoTipoDoc
 * @property string $NumeroDocumento
 * @property string $FechaDocumento
 * @property double $CostoUnitario
 * @property integer $id
 * @property integer $CodigoEstadoEquipo
 * @property string $Observaciones
 * @property string $SistemaFecha
 * @property string $SistemaUsuario
 * @property integer $CodigoEstadoAsignacion
 *
 * @property TbBnDetalleActaAsignacion[] $tbBnDetalleActaAsignacions
 * @property TbBnCategoriasBienes $codigoCategoria
 * @property TbBnEdificios $codigoEdificio
 * @property User $id0
 * @property TbBnEstadoasignacion $codigoEstadoAsignacion
 * @property TbBnEstadoEquipo $codigoEstadoEquipo
 * @property TbBnTiposDocumentos $codigoTipoDoc
 * @property TbBnSolicitudDetalle[] $tbBnSolicitudDetalles
 */
class TbBnEquipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bn_equipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha', 'FechaDocumento', 'SistemaFecha'], 'safe'],
            [['NumeroInventario', 'DescripcionEquipo', 'Marca', 'SerieEquipo', 'Color', 'Telefono', 'Piso', 'NumeroDocumento', 'Observaciones', 'SistemaUsuario'], 'string'],
            [['CodigoCategoria', 'CodigoDepartamento', 'CodigoEdificio', 'CodigoTipoDoc', 'id', 'CodigoEstadoEquipo', 'CodigoEstadoAsignacion'], 'required'],
            [['CodigoCategoria', 'CodigoDepartamento', 'CodigoEdificio', 'CodigoTipoDoc', 'id', 'CodigoEstadoEquipo', 'CodigoEstadoAsignacion'], 'integer'],
            [['CostoUnitario'], 'number'],
            [['CodigoCategoria'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnCategoriasBienes::className(), 'targetAttribute' => ['CodigoCategoria' => 'CodigoCategoria']],
            [['CodigoEdificio'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEdificios::className(), 'targetAttribute' => ['CodigoEdificio' => 'CodigoEdificio']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
            [['CodigoEstadoAsignacion'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEstadoasignacion::className(), 'targetAttribute' => ['CodigoEstadoAsignacion' => 'CodigoEstadoAsignacion']],
            [['CodigoEstadoEquipo'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnEstadoEquipo::className(), 'targetAttribute' => ['CodigoEstadoEquipo' => 'CodigoEstadoEquipo']],
            [['CodigoTipoDoc'], 'exist', 'skipOnError' => true, 'targetClass' => TbBnTiposDocumentos::className(), 'targetAttribute' => ['CodigoTipoDoc' => 'CodigoTipoDoc']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodigoEquipo' => 'Codigo Equipo',
            'Fecha' => 'Fecha',
            'NumeroInventario' => 'Numero Inventario',
            'CodigoCategoria' => 'Codigo Categoria',
            'DescripcionEquipo' => 'Descripcion Equipo',
            'Marca' => 'Marca',
            'SerieEquipo' => 'Serie Equipo',
            'Color' => 'Color',
            'CodigoDepartamento' => 'Codigo Departamento',
            'Telefono' => 'Telefono',
            'Piso' => 'Piso',
            'CodigoEdificio' => 'Codigo Edificio',
            'CodigoTipoDoc' => 'Codigo Tipo Doc',
            'NumeroDocumento' => 'Numero Documento',
            'FechaDocumento' => 'Fecha Documento',
            'CostoUnitario' => 'Costo Unitario',
            'id' => 'ID',
            'CodigoEstadoEquipo' => 'Codigo Estado Equipo',
            'Observaciones' => 'Observaciones',
            'SistemaFecha' => 'Sistema Fecha',
            'SistemaUsuario' => 'Sistema Usuario',
            'CodigoEstadoAsignacion' => 'Codigo Estado Asignacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnDetalleActaAsignacions()
    {
        return $this->hasMany(TbBnDetalleActaAsignacion::className(), ['CodigoEquipo' => 'CodigoEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoCategoria()
    {
        return $this->hasOne(TbBnCategoriasBienes::className(), ['CodigoCategoria' => 'CodigoCategoria']);
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
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoEstadoAsignacion()
    {
        return $this->hasOne(TbBnEstadoasignacion::className(), ['CodigoEstadoAsignacion' => 'CodigoEstadoAsignacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoEstadoEquipo()
    {
        return $this->hasOne(TbBnEstadoEquipo::className(), ['CodigoEstadoEquipo' => 'CodigoEstadoEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoTipoDoc()
    {
        return $this->hasOne(TbBnTiposDocumentos::className(), ['CodigoTipoDoc' => 'CodigoTipoDoc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBnSolicitudDetalles()
    {
        return $this->hasMany(TbBnSolicitudDetalle::className(), ['CodigoEquipo' => 'CodigoEquipo']);
    }
}
