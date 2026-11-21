<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About Me";
        $nama = "Nama : Oscar Angelo Petrick";
        $kelas = "Kelas : XI PPLG 1";
        $hobby = "Hobby : Bermain Game";
        $repository = "Akun repository : ";
        return view('admin.about', [
            'title' => $title,
            'nama' => $nama,
            'kelas' => $kelas,
            'hobby' => $hobby,
            'repository' => $repository,
        ]);
    }
}
