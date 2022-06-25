<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DiscussionChat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pengirim'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'isi'       => [
                'type'           => 'TEXT'
            ],
            'discussion_id'      => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'owner_id'      => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('discussion_chat');
    }

    public function down()
    {
        $this->forge->dropTable('discussion_chat');
    }
}
