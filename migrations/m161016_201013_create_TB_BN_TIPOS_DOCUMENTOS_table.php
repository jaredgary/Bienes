<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_tipos_documentos`.
 */
class m161016_201013_create_TB_BN_TIPOS_DOCUMENTOS_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_tipos_documentos', [
            'CodigoTipoDoc' => $this->primaryKey(),
            'TipoDocumento' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_tipos_documentos');
    }
}
