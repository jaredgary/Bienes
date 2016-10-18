<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_gestiones_solicitudes`.
 */
class m161016_195501_create_TB_BN_GESTIONES_SOLICITUDES_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tb_bn_gestiones_solicitudes', [
            'CodigoGestion' => $this->primaryKey(),
            'CodigoSolicitud' => $this->integer()->notNull(),
            'CodigoEstado' => $this->integer()->notNull(),
            'Observaciones' => $this->string(255),
            'SistemaUsuario' => $this->string(50),
            'FechaSistema' => $this->dateTime(),
        ]);
        $this->addForeignKey('fk_GESTIONES_SOLICITUD','tb_bn_gestiones_solicitudes','CodigoSolicitud','tb_bn_solicitud_descargo','CodigoSolicitud');
        $this->addForeignKey('fk_GESTIONES_ESTADO','tb_bn_gestiones_solicitudes','CodigoEstado','tb_bn_estado_solicitud','CodigoEstado');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_gestiones_solicitudes');
    }
}
