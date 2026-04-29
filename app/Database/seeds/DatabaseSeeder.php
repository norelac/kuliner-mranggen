<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('KategoriSeeder');
        $this->call('TagSeeder');
        $this->call('KulinerSeeder');
        $this->call('KulinerTagSeeder');
        $this->call('KulinerGambarSeeder');
        $this->call('ReviewSeeder');
        $this->call('FavoritSeeder');
        $this->call('LaporanSeeder');       
    }
}