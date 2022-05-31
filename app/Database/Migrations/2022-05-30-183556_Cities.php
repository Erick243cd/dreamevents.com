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
                'unsigned'       => TRUE,
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
        $this->forge->createTable('lp_cities');
    }

    public function down()
    {
        // $this->forge->dropTable('lp_cities');
    }
}
