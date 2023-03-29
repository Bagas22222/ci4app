<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' =>true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' =>true,
            ],
        ]);
         // primary key
         $this->forge->addKey('id', true);
    
         // nama tabel
         $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
