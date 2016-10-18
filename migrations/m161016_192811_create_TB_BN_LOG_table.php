<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_log`.
 */
class m161016_192811_create_TB_BN_LOG_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_log', [
            'codigoLog' => $this->primaryKey(),
            'codigoAC' => $this->integer()->notNull(),
            'id' => $this->integer()->notNull(),
            'descripcion' => $this->string(255),
            'SistemaUsuario' => $this->string(50),
            'fecha' => $this->dateTime(),
        ]);
        $this->addForeignKey('fk_LOG_ACCIONES','tb_bn_log','codigoAC','tb_bn_acciones','codigoAC');
        $this->addForeignKey('fk_LOG_USUARIO','tb_bn_log','id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_log');
    }
}
