<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'categryId'            => [
                'type'           => 'INT',
                'auto_increment' => TRUE
            ],
            'categoryName_fr'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'categoryName_en'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'isactive'      => [
                'type'          => 'INTEGER',
                'default'       => 1
            ]
        ]);
    
        $this->forge->addKey('categryId', TRUE);
        $this->forge->createTable('pl_categories');
    }

    public function down()
    {
        //
    }
}
