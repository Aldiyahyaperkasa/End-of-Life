<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_pengguna' => 'admin',
            'email'         => 'adminaja@example.com',
            'password'      => password_hash('admin', PASSWORD_DEFAULT),
            'role'          => 'admin',
            'created_at'    => date('Y-m-d H:i:s'),
        ];

        // Insert data ke tabel pengguna
        $this->db->table('pengguna')->insert($data);
    }
}
