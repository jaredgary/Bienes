<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_detalle_acta_descargo`.
 */
class m161016_210759_create_TB_BN_DETALLE_ACTA_DESCARGO_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_detalle_acta_descargo', [
            'CodigoDetalleActaDescargo' => $this->primaryKey(),
            'CodigoActaDescargo' => $this->integer()->notNull(),
            'CodigoDetalleActaAsignacion' => $this->integer()->notNull(),
            'CodigoEquipo' => $this->integer()->notNull(),
            'CodigoActaAsignacion' => $this->integer()->notNull(),
            'CodigoEstadoEquipo' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_DETALLE_DESCARGO_ACTA','tb_bn_detalle_acta_descargo','CodigoActaDescargo','tb_bn_acta_descargo','CodigoActaDescargo');
        $this->addForeignKey('fk_DETALLE_DESCARGO_ACTA_ASIGNACION','tb_bn_detalle_acta_descargo','CodigoDetalleActaAsignacion','tb_bn_detalle_acta_asignacion','CodigoDetalleActaAsignacion');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_detalle_acta_descargo');
    }
}
