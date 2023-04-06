<?php

namespace App\Http\Controllers;

use App\Models\PengalamanKerja;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengalamanKerjaController extends Controller
{

    public function update($id)
    {
        $data = PengalamanKerja::where('id', '=', $id)->first();

        return view('admin.create', compact('data'));
    }

    public function data()
    {

        $data = PengalamanKerja::orderBy('created_at', 'desc')->paginate(6);
        

        return view('admin.dashboard', compact('data'));
    }

    public function search_data(Request $request)
    {
        $data = PengalamanKerja::where('nama', 'LIKE', '%' . $request->get('nama') . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        // TODO: Menyisipkan parameter nama pada url
        $data->appends(array(
            'nama' => $request->get('nama')
        ));

        return view('admin.dashboard', compact('data'));
    }

    public function proses_create(Request $request)
    {
        // TODO: Proses validasi
        $this->validate($request, [
            'nama' => 'required|string',
            'jabatan' => 'required',
            'tahun_masuk' => 'required|max:4',
            'tahun_keluar' => 'required|max:4',
        ]);

        $data = new PengalamanKerja;
        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->tahun_keluar = $request->tahun_keluar;
        $data->save();


        return redirect()->route('admin.dashboard')->with('success', 'Berhasil menambahkan data');
    }

    public function proses_update(Request $request)
    {
        // TODO: Proses validasi
        $this->validate($request, [
            'nama' => 'required|string',
            'jabatan' => 'required',
            'tahun_masuk' => 'required|max:4',
            'tahun_keluar' => 'required|max:4',
        ]);

        // find digunakan untuk mencari data berdasarkan primary key nya
        $data = PengalamanKerja::find($request->id);
        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->tahun_keluar = $request->tahun_keluar;
        $data->save();


        return redirect()->route('admin.dashboard')->with('success', 'Berhasil mengubah data');
    }

    public function proses_delete($id)
    {
     // find digunakan untuk mencari data berdasarkan primary key nya
        $data = PengalamanKerja::find($id);   
        $data->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Berhasil menghapus data');
    }
}
