<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ReviewModel;

class Review extends BaseController
{
    protected ReviewModel $reviewModel;

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
    }

    public function index()
    {
        $data['review'] = $this->reviewModel
            ->select('review.*, users.nama as nama_user, kuliner.nama as nama_kuliner')
            ->join('users', 'users.id = review.user_id')
            ->join('kuliner', 'kuliner.id = review.kuliner_id')
            ->findAll();

        return view('admin/review/index', $data);
    }

    public function delete(int $id)
    {
        $this->reviewModel->delete($id);
        return redirect()->to('/admin/review');
    }
}