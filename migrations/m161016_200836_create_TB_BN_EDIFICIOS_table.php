<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_edificios`.
 */
class m161016_200836_create_TB_BN_EDIFICIOS_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_edificios', [
            'CodigoEdificio' => $this->primaryKey(),
            'NombreEdificio' => $this->string(100),
            'DireccionEdificio' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_edificios');
    }
}
