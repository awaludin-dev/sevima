<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class File extends Migration
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
            'judul'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'slug'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'file'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'id_owner'       => [
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
        $this->forge->createTable('file');
    }

    public function down()
    {
        $this->forge->dropTable('file');
    }
}
