<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_estado_solicitud`.
 */
class m161016_195323_create_TB_BN_ESTADO_SOLICITUD_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tb_bn_estado_solicitud', [
            'CodigoEstado' => $this->primaryKey(),
            'Estado' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_estado_solicitud');
    }
}
