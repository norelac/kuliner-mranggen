<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        $this->db->table('users')->insertBatch([
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Iqbal',
                'email' => 'iqbal@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'role' => 'user',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Delvia',
                'email' => 'delvia@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'role' => 'user',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);

        /*
        |--------------------------------------------------------------------------
        | KATEGORI
        |--------------------------------------------------------------------------
        */

        $this->db->table('kategori')->insertBatch([
            ['nama' => 'Warteg'],
            ['nama' => 'Cafe'],
            ['nama' => 'Street Food'],
            ['nama' => 'Minuman']
        ]);

        /*
        |--------------------------------------------------------------------------
        | TAG
        |--------------------------------------------------------------------------
        */

        $this->db->table('tag')->insertBatch([
            ['nama' => 'Murah'],
            ['nama' => 'Halal'],
            ['nama' => 'WiFi'],
            ['nama' => 'Parkir']
        ]);

        /*
        |--------------------------------------------------------------------------
        | KULINER
        |--------------------------------------------------------------------------
        */

        $this->db->table('kuliner')->insertBatch([
            [
                'user_id' => 1,
                'nama' => 'Bakso Pak Slamet',
                'alamat' => 'Jl. Raya Mranggen',
                'deskripsi' => 'Bakso enak dan murah',
                'kategori_id' => 1,
                'latitude' => -6.99000000,
                'longitude' => 110.50000000,
                'status' => 'approved',
                'is_closed' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'nama' => 'Seblak Teh Rina',
                'alamat' => 'Pasar Mranggen',
                'deskripsi' => 'Seblak pedas favorit mahasiswa',
                'kategori_id' => 3,
                'latitude' => -6.99100000,
                'longitude' => 110.50100000,
                'status' => 'approved',
                'is_closed' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}