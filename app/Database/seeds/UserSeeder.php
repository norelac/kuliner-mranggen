<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insertBatch([
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin',
                'status' => 1
            ],
            [
                'nama' => 'Iqbal',
                'email' => 'iqbal@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'role' => 'user',
                'status' => 1
            ],
            [
                'nama' => 'Delvia',
                'email' => 'delvia@gmail.com',
                'password' => password_hash('123457', PASSWORD_DEFAULT),
                'role' => 'user',
                'status' => 1
            ]
        ]);
    }
}