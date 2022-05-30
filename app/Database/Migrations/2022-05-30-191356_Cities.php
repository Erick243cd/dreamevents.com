<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cities extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cityId'            => [
                'type'           => 'INT',
                'auto_increment' => TRUE
            ],
            'cityName_fr'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'cityName_en'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'isactive'      => [
                'type'          => 'INTEGER',
                'default'       => 1
            ]
        ]);
    
        $this->forge->addKey('cityId', TRUE);
        $this->forge->createTable('pl_cities');
    }

    public function down()
    {
        //
    }
}
