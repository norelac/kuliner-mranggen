<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,    
                'nama' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'role' => 'admin',
                'status' => 1
            ],
            [
                'id' => 4,
                'nama' => 'Iqbal',
                'email' => 'iqbal@mail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'role' => 'user',
                'status' => 1
            ],
            [
                'id' => 3,
                'nama' => 'Delvia',
                'email' => 'delvia@gmail.com',
                'password' => password_hash('123457', PASSWORD_DEFAULT),
                'role' => 'user',
                'status' => 1
            ]
        ];

        foreach ($data as $item) {
            $exists = $this->db->table('users')
                ->where('email', $item['email'])
                ->get()->getRow();

            if (!$exists) {
                $this->db->table('users')->insert($item);
            }
        }
    }
}
