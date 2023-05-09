<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function proses(Request $request){
        // proses validasi
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'alamat' => 'required',
        ]);
    
        // Mengambil hasil input dari request
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        // Menambilkan data nama dan alamat
        return "Nama : " . $nama . " , Alamat : " . $alamat;
    }
}
