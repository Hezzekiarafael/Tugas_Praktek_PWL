<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DetailKatController extends Controller
{
    public function detail($nama_kategori)
    {
        $data['kategori'] = urldecode($nama_kategori); // Decode nama kategori

        return view('v_detail_kategori', $data);
    }
}
