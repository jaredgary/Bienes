<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_estadoasignacion`.
 */
class m161016_202007_create_TB_BN_EstadoAsignacion_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_estadoasignacion', [
            'CodigoEstadoAsignacion' => $this->primaryKey(),
            'EstadoAsignacion' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_estadoasignacion');
    }
}
