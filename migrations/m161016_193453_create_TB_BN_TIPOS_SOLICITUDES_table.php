<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_tipos_solicitudes`.
 */
class m161016_193453_create_TB_BN_TIPOS_SOLICITUDES_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tb_bn_tipos_solicitudes', [
            'codigoTipoSolicitud' => $this->primaryKey(),
            'TipoSolicitud' => $this->string(100),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_tipos_solicitudes');
    }
}
