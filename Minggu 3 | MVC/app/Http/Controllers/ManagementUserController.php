<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        $nama = "Bintang Malindo Eka Putra";
        $pelajaran = ["Pemrograman Web", "Kalkulus", "Workshop Mobile"];

        return view('minggu3.home', [
            "nama" => $nama,
            "pelajaran" => $pelajaran,
        ]);
        // TODO: Return view minggu3.home dengan mengirimkan data dengan berupa array
    }
}
