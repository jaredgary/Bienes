<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_estado_equipo`.
 */
class m161016_200031_create_TB_BN_ESTADO_EQUIPO_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_estado_equipo', [
            'CodigoEstadoEquipo' => $this->primaryKey(),
            'EstadoEquipo' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_estado_equipo');
    }
}
