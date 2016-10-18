<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_solicitud_descargo`.
 */
class m161016_193902_create_TB_BN_SOLICITUD_DESCARGO_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_solicitud_descargo', [
            'CodigoSolicitud' => $this->primaryKey(),
            'FechaSolicitud' => $this->date(),
            'id' => $this->integer()->notNull(),
            'MotivoSolicitud' => $this->string(),
            'Estado' => $this->integer(),
            'SistemaFecha' => $this->dateTime(),
            'SistemaUsuario' => $this->string(50),
        ]);
        $this->addForeignKey('fk_DESCARGO_EMPLEADO','tb_bn_solicitud_descargo','id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_solicitud_descargo');
    }
}
