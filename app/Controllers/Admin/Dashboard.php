<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data['total_kuliner'] = $db->table('kuliner')->countAllResults();
        $data['total_user'] = $db->table('users')->countAllResults();
        $data['total_review'] = $db->table('review')->countAllResults();
        $data['total_kategori'] = $db->table('kategori')->countAllResults();

        return view('admin/dashboard', $data);
    }
}