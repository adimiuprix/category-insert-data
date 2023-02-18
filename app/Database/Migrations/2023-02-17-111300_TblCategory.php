<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblCategory extends Migration
{
    public function up(){
        $this->forge->addField([
            'category_id' => [
                'type'           => 'INT',
                'constraint'     => '100',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'category_description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('category_id', true);
        $this->forge->createTable('tbl_category');    }

    public function down()
    {
        $this->forge->dropTable('tbl_category');
    }
}
