<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'kuliner_id',
        'rating',
        'komentar'
    ];
}