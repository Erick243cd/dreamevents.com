<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'categoryId'            => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
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
            'categorySlug'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'isactive'      => [
                'type'          => 'INTEGER',
                'default'       => 1
            ]
        ]);
    
        $this->forge->addKey('categoryId', TRUE);
        $this->forge->createTable('lp_categories');
    }

    public function down()
    {
        // $this->forge->dropTable('lp_categories');
    }
}
