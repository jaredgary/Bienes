<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_detalle_acta_asignacion`.
 */
class m161016_204345_create_TB_BN_DETALLE_ACTA_ASIGNACION_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_detalle_acta_asignacion', [
            'CodigoDetalleActaAsignacion' => $this->primaryKey(),
            'CodigoActaAsignacion' => $this->integer()->notNull(),
            'CodigoEquipo' => $this->integer()->notNull(),
            'CodigoDepartamento' => $this->integer()->notNull(),
            'Telefono' => $this->string(15),
            'Piso' => $this->string(50),
            'CodigoEdificio' => $this->integer()->notNull(),
            'CodigoEstadoEquipo' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_DETALLE_ACTA_ASIGNACION_ACTA','tb_bn_detalle_acta_asignacion','CodigoActaAsignacion','tb_bn_acta_asignacion','CodigoActaAsignacion');
        $this->addForeignKey('fk_DETALLE_ACTA_ASIGNACION_EQUIPO','tb_bn_detalle_acta_asignacion','CodigoEquipo','tb_bn_equipos','CodigoEquipo');
        $this->addForeignKey('fk_DETALLE_ACTA_ASIGNACION_EDIFICIO','tb_bn_detalle_acta_asignacion','CodigoEdificio','tb_bn_edificios','CodigoEdificio');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_detalle_acta_asignacion');
    }
}
