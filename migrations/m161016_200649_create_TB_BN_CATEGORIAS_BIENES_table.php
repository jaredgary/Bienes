<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_categorias_bienes`.
 */
class m161016_200649_create_TB_BN_CATEGORIAS_BIENES_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tb_bn_categorias_bienes', [
            'CodigoCategoria' => $this->primaryKey(),
            'Categoria' => $this->string(255),
            'FechaSistema' => $this->dateTime(),
            'SistemaUsuario' => $this->string(100),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_categorias_bienes');
    }
}
