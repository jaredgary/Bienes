<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_solicitud_detalle`.
 */
class m161016_205729_create_TB_BN_SOLICITUD_DETALLE_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_solicitud_detalle', [
            'CodigoDetalle' => $this->primaryKey(),
            'CodigoSolicitud' => $this->integer()->notNull(),
            'CodigoEquipo' => $this->integer()->notNull(),
            'FechaSistema' => $this->dateTime(),
            'SistemaUsuario' => $this->string(50),
        ]);
        $this->addForeignKey('fk_SOLICITUD_DETALLE_DESCARGO','tb_bn_solicitud_detalle','CodigoSolicitud','tb_bn_solicitud_descargo','CodigoSolicitud');
        $this->addForeignKey('fk_SOLICITUD_DETALLE_EQUIPO','tb_bn_solicitud_detalle','CodigoEquipo','tb_bn_equipos','CodigoEquipo');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_solicitud_detalle');
    }
}
