<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userId'            => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'userFirstName'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'userFirstName'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'userSecondName'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'userEmailAddress'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'userPhone'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],

            'userAdress'      => [
                'type'          => 'TEXT'
            ],

            'userAvatar'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],

            'userPwd'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],

            'isactive'      => [
                'type'          => 'INTEGER',
                'default'       => 1
            ]
        ]);
    
        $this->forge->addKey('userId', TRUE);
        $this->forge->createTable('lp_users');
    }

    public function down()
    {
        //
    }
}
