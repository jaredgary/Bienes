<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tb_bn_acta_asignacion`.
 */
class m161016_200240_create_TB_BN_ACTA_ASIGNACION_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tb_bn_acta_asignacion', [
            'CodigoActaAsignacion' => $this->primaryKey(),
            'id' => $this->integer()->notNull(),
            'SistemaUsuario' => $this->string(100),
            'FechaSistema' => $this->dateTime(),
            'CodigoInspector' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_ACTA_EMPLEADO','tb_bn_acta_asignacion','id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_bn_acta_asignacion');
    }
}
