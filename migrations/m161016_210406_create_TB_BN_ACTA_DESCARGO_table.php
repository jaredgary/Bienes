<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_acta_descargo`.
 */
class m161016_210406_create_TB_BN_ACTA_DESCARGO_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_acta_descargo', [
            'CodigoActaDescargo' => $this->primaryKey(),
            'id' => $this->integer()->notNull(),
            'Inspector' => $this->integer()->notNull(),
            'Observaciones' => $this->string(255),
            'SistemaUsuario' => $this->string(255),
            'FechaSistema' => $this->dateTime(),
        ]);
        $this->addForeignKey('fk_ACTA_DESCARGO_EMPLEADO','tb_bn_acta_descargo','id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_acta_descargo');
    }
}
