<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDbBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'genre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'lorong' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('db_buku');
    }

    public function down()
    {
        $this->forge->dropTable('db_buku');
    }
}
