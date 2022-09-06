<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051027',
                'nama'    => 'Ages Mahesa',
                'alamat'    => 'Kotaagung',
                'created_at'    => Time::now()
            ],
            [
                'npm' => '2017051045',
                'nama'    => 'Aura Husnaini',
                'alamat'    => 'Martapura',
                'created_at'    => Time::now()
            ],
            [
                'npm' => '2017051016',
                'nama'    => 'Yulia Dwi Putri',
                'alamat'    => 'Pesawaran',
                'created_at'    => Time::now()
            ],
            [
                'npm' => '2017051031',
                'nama'    => 'Melan Caniadi',
                'alamat'    => 'Liwa',
                'created_at'    => Time::now()
            ],
            [
                'npm' => '2017051002',
                'nama'    => 'Dita Faradila',
                'alamat'    => 'Terbanggi Besar',
                'created_at'    => Time::now()
            ],
        ];

        // ini untuk yang satu data, kalo datanya banyak gabisa pake yang simple queries
        // Simple Queries
        // $this->db->query('INSERT INTO users (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
