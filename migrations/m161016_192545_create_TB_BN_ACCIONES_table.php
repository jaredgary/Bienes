<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_acciones`.
 */
class m161016_192545_create_TB_BN_ACCIONES_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_acciones', [
            'codigoAC' => $this->primaryKey(),
            'DescripcionAC' => $this->string(255),
            'EstadoAC' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_acciones');
    }
}
