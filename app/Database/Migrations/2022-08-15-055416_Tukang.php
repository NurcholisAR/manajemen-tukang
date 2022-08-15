<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tukang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tukang' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'slug' => [
                'type'              => 'CHAR',
                'constraint'        => 250
            ],
            'nama_tukang' => [
                'type'              => 'VARCHAR',
                'constraint'        => 250
            ],
            'lembur_tukang' => [
                'type'              => ''
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
