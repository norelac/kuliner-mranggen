<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KulinerModel;

class Kuliner extends BaseController
{
    protected $KulinerModel;

    public function __construct()
    {
        $this->KulinerModel = new KulinerModel();
    }

 public function getCoordinate()
{
    $alamat = $this->request->getPost('alamat');

    $client = \Config\Services::curlrequest();

    $response = $client->get(
        'https://nominatim.openstreetmap.org/search', [
            'query' => [
                'q' => $alamat,
                'format' => 'json',
                'limit' => 1
            ],
            'headers' => [
                'User-Agent' => 'CodeIgniter4App'
            ]
        ]
    );

    $result = json_decode($response->getBody(), true);

    if (!empty($result)) {
        return $this->response->setJSON([
            'status' => true,
            'lat' => $result[0]['lat'],
            'lon' => $result[0]['lon']
        ]);
    }

    return $this->response->setJSON([
        'status' => false
    ]);
}
    public function index()
    {
        $data['kuliner'] = $this->KulinerModel->findAll();
        return view('admin/kuliner/index', $data);
    }

    public function create()
    {
        return view('admin/kuliner/create');
    }

    public function store()
    {
        $this->KulinerModel->save([
            'user_id' => session()->get('user_id'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'status' => 'approved',
            'is_closed' => 0,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/admin/kuliner');
    }
}
