<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $KategoriModel;

    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data['kategori'] = $this->KategoriModel->findAll();
        return view('admin/kategori/index', $data);
    }

    public function create()
    {
        return view('admin/kategori/create');
    }

    public function store()
    {
        $this->KategoriModel->save([
            'nama' => $this->request->getPost('nama')
        ]);

        return redirect()->to('/admin/kategori');
    }

    public function delete($id)
    {
        $this->KategoriModel->delete($id);
        return redirect()->to('/admin/kategori');
    }
}