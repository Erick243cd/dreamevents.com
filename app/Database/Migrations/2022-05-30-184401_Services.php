<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Services extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'serviceId'            => [
                'type'           => 'INT',
                'auto_increment' => TRUE
            ],

            'categoryId' => [
                'type'          => 'INT'
            ],

            'userId' => [
                'type'          => 'INT'
            ],

            'cityId'       => [
                'type'          => 'INT'
            ],

            'serviceName_fr'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],

            'serviceName_en'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'serviceEmail'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'servicePhone'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'serviceWebsite'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'serviceLocation'       => [
                'type'          => 'TEXT',
            ],

            'serviceDescription'       => [
                'type'          => 'TEXT',
            ],

            'isactive'      => [
                'type'          => 'INTEGER',
                'default'       => 1
            ]
        ]);
        $this->forge->addKey('serviceId', TRUE);
        $this->forge->createTable('lp_services');
        $this->forge->addForeignKey('categoryId', 'lp_categories', 'categryId');
        $this->forge->addForeignKey('userId', 'lp_users', 'userId');
    }

    public function down()
    {
        //
    }
}
