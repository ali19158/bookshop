<?php

use yii\db\Migration;

/**
 * Class m191020_080757_create_table_subscriber
 */
class m191020_080757_create_table_subscriber extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = 'CREATE TABLE subscriber (id INT(11) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) UNIQUE);';
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = 'DROP TABLE subscriber;';
        Yii::$app->db->createCommand($sql)->execute();
    }
}
