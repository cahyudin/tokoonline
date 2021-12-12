<?php

namespace App\Database\Migrations;



class komentar extends \CodeIgniter\Database\Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,

            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,

            ],
            'komentar' => [
                'type' => 'TEXT',
                'constraint' => 11,
            ],

            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',

            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);
        $this->forge->addkey('id', TRUE);
        $this->forge->addforeignKey('id_user', 'user', 'id');
        $this->forge->addforeignKey('id_barang', 'barang', 'id');
        $this->forge->CreateTable('komentar');
    }
    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
