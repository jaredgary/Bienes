<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user`.
 */
class m161016_192540_create_USER_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password' => $this->string(255),
            'authKey' => $this->string(32),
            'accessToken' => $this->string(32),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
