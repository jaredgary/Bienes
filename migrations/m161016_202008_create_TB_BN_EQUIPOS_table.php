<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_equipos`.
 */
class m161016_202008_create_TB_BN_EQUIPOS_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_equipos', [
            'CodigoEquipo' => $this->primaryKey(),
            'Fecha' => $this->dateTime(),
            'NumeroInventario' => $this->string(255),
            'CodigoCategoria' => $this->integer()->notNull(),
            'DescripcionEquipo' => $this->string(255),
            'Marca' => $this->string(50),
            'SerieEquipo' => $this->string(100),
            'Color' => $this->string(50),
            'CodigoDepartamento' => $this->integer()->notNull(),
            'Telefono' => $this->string(15),
            'Piso' => $this->string(50),
            'CodigoEdificio' => $this->integer()->notNull(),
            'CodigoTipoDoc' => $this->integer()->notNull(),
            'NumeroDocumento' => $this->string(50),
            'FechaDocumento' => $this->dateTime(),
            'CostoUnitario' => $this->double(18,2),
            'id' => $this->integer()->notNull(),
            'CodigoEstadoEquipo' => $this->integer()->notNull(),
            'Observaciones' => $this->string(255),
            'SistemaFecha' => $this->dateTime(),
            'SistemaUsuario' => $this->string(100),
            'CodigoEstadoAsignacion' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_EQUIPOS_CATEGORIA','tb_bn_equipos','CodigoCategoria','tb_bn_categorias_bienes','CodigoCategoria');
        $this->addForeignKey('fk_EQUIPOS_EDIFICIOS','tb_bn_equipos','CodigoEdificio','tb_bn_edificios','CodigoEdificio');
        $this->addForeignKey('fk_EQUIPOS_TIPO_DOC','tb_bn_equipos','CodigoTipoDoc','tb_bn_tipos_documentos','CodigoTipoDoc');
        $this->addForeignKey('fk_EQUIPOS_EMPLEADO','tb_bn_equipos','id','user','id');
        $this->addForeignKey('fk_EQUIPOS_ESTADO_EQUIPO','tb_bn_equipos','CodigoEstadoEquipo','tb_bn_estado_equipo','CodigoEstadoEquipo');
        $this->addForeignKey('fk_EQUIPOS_ESTADO_ASIGNACION','tb_bn_equipos','CodigoEstadoAsignacion','tb_bn_estadoasignacion','CodigoEstadoAsignacion');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_equipos');
    }
}
