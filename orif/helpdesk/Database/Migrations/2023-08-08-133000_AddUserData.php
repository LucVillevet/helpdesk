<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserData extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user_data' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'fk_user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],

            'nom_user_data' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ],

            'prenom_user_data' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ],

            'initiales_user_data' => [
                'type'           => 'VARCHAR',
                'constraint'     => 16,
                'null'           => true,
            ],
            
            'photo_user_data' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id_etat', true);

        $this->forge->addForeignKey('fk_user_id', 'user', 'id');

        $this->forge->createTable('tbl_user_data');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user_data');
    }
}