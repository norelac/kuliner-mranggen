<?php

namespace App\Controllers;

use App\Models\KulinerModel;

class Kuliner extends BaseController
{
    protected $kulinerModel;

    public function __construct()
    {
        $this->kulinerModel = new KulinerModel();
    }

    public function index()
    {
        $data['kuliner'] = $this->kulinerModel->findAll();
        return view('kuliner/index', $data);
    }
}