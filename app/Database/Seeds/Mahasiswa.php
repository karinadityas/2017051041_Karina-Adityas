<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'nama'          => 'Karina',
                'npm'           => '2017051041',
                'alamat'        => 'Bandarlampung',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Zolu',
                'npm'           => '2017051042',
                'alamat'        => 'Bandarlampung',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Rayi',
                'npm'           => '2017051043',
                'alamat'        => 'Bandarlampung',
                'created_at'    =>  Time::now()
            ],

        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}