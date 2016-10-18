<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_archivos_url`.
 */
class m161016_194811_create_TB_BN_ARCHIVOS_URL_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_archivos_url', [
            'Codigo' => $this->primaryKey(),
            'CodigoSolicitud' => $this->integer()->notNull(),
            'codigoTipoSolicitud' => $this->integer()->notNull(),
            'Ruta' => $this->string(255),
            'NombreDocumento' => $this->string(255),
            'Formato' => $this->string(50),
        ]);
        $this->addForeignKey('fk_ARCHIVOS_SOLICITUD','tb_bn_archivos_url','CodigoSolicitud','tb_bn_solicitud_descargo','CodigoSolicitud');
        $this->addForeignKey('fk_ARCHIVOS_TIPO_SOLICITUD','tb_bn_archivos_url','codigoTipoSolicitud','tb_bn_tipos_solicitudes','codigoTipoSolicitud');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_archivos_url');
    }
}
