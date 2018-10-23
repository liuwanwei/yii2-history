<?php

use yii\db\Migration;

/**
 * Handles the creation of table `login_record`.
 */
class m180109_032252_create_login_record_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('bs_login_record', [
            'id' => $this->primaryKey(),
            'username' => $this->string(32)->notNull(),
            'clientIp' => $this->text()->notNull(),
            'createdAt' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('bs_login_record');
    }
}
