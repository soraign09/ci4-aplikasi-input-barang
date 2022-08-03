<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use App\Models\Pengguna_12200169;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'   => 'Reza',
                'password' => md5('1220169')
            ],
            [
                'nama'   => 'admin',
                'password' => md5('12345')
            ],
            [
                'nama'   => '12200169',
                'password' => md5('reza_saputra')
            ]
        ];
        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
