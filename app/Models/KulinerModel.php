<?php

namespace App\Models;

use CodeIgniter\Model;

class KulinerModel extends Model
{
    protected $table = 'kuliner';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'nama',
        'alamat',
        'deskripsi',
        'kategori_id',
        'latitude',
        'longitude',
        'status',
        'is_closed',
        'created_at'
    ];
}