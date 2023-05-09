<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function index(Request $request){

        
        $nama = $request->session()->get("nama");
        // menampilkan view dengan mengirimkan data nama yang diambil dari session
        return view('session', compact("nama"));
    }

    public function create(Request $request){
        // input session dengan key nama
        $request->session()->put('nama', 'Bintang Malindo Eka Putra');

        // redirect ke url /session
        return redirect('/session');

    }

    public function delete(Request $request){
        $request->session()->remove("nama");
        // menghapus session dengan key nama

        // redirect ke url /session
        return redirect('/session');

    }
}
