<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    public function index()
    {
       $mhs = new Mahasiswa_model();
       $data['mahasiswa'] = $mhs->findAll();
        return view('mahasiswa/index', $data);
    }
}
