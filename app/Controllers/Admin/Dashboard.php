<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data['totalKuliner'] = $db->table('kuliner')->countAllResults();
        $data['totalUser'] = $db->table('users')->countAllResults();
        $data['totalReview'] = $db->table('review')->countAllResults();
        $data['totalKategori'] = $db->table('kategori')->countAllResults();

        return view('admin/dashboard', $data);
    }
}