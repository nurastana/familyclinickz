<?php

use yii\db\Schema;
use yii\db\Migration;

class m150515_120931_category_create extends Migration
{
    public function up()
    {
        $this->createTable('{{%category}}', [
            'id'                => Schema::TYPE_PK,
            'title'             => Schema::TYPE_STRING . ' NOT NULL',
            'alias'             => Schema::TYPE_STRING,
            'description'       => Schema::TYPE_TEXT,
            'metaKeywords'      => Schema::TYPE_STRING,
            'metaDescription'   => Schema::TYPE_STRING,
            'dateCreate'        => Schema::TYPE_TIMESTAMP,
            'visible'           => Schema::TYPE_SMALLINT,
            'parentId'          => Schema::TYPE_INTEGER. ' DEFAULT 0',
        ]);

        $this->createIndex('ixAlias','{{%category}}',['alias']);
        $this->createIndex('ixVisible','{{%category}}',['visible']);
        $this->createIndex('ixParent','{{%category}}',['parentId']);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
        return true;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
