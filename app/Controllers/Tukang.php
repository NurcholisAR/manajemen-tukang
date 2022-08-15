<?php

namespace App\Controllers;

class Tukang extends BaseController
{
    public function index()
    {
        $data = ['title' => 'List Tukang'];
        return view('Input/Tukang/V_tukang', $data);
    }

    public function list_tukang()
    {
        if ($this->request->isAJAX()) {
            $tampil = ['data' => view('Input/Tukang/list_tukang')];
            echo json_encode($tampil);
        } else {
            exit('maaf data tidak bisa ditampilkan');
        }
    }
}
