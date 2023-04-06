<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengalamanKerjaController extends Controller
{

    public function update($id)
    {
        $data =  DB::table('pengalaman_kerja')
            ->where('id', '=', $id)->first();

        return view('admin.create', compact('data'));
    }

    public function data()
    {
        $data =  DB::table('pengalaman_kerja')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('admin.dashboard', compact('data'));
    }

    public function search_data(Request $request)
    {
        $data =  DB::table('pengalaman_kerja')
            ->where('nama', 'LIKE', '%' . $request->get('nama') . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        $data->appends(array(
            'nama' => $request->get('nama')
        ));

        return view('admin.dashboard', compact('data'));
    }

    public function proses_create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'jabatan' => 'required',
            'tahun_masuk' => 'required|max:4',
            'tahun_keluar' => 'required|max:4',
        ]);

        $data = $request->except(['_token']);


        DB::table('pengalaman_kerja')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);



        return redirect()->route('admin.dashboard')->with('success', 'Berhasil menambahkan data');
    }

    public function proses_update(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'jabatan' => 'required',
            'tahun_masuk' => 'required|max:4',
            'tahun_keluar' => 'required|max:4',
        ]);


        DB::table('pengalaman_kerja')
            ->where('id', '=', $request->id)
            ->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'tahun_masuk' => $request->tahun_masuk,
                'tahun_keluar' => $request->tahun_keluar,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);

        return redirect()->route('admin.dashboard')->with('success', 'Berhasil mengubah data');
    }

    public function proses_delete($id)
    {
        DB::table('pengalaman_kerja')
            ->delete($id);
        return redirect()->route('admin.dashboard')->with('success', 'Berhasil menghapus data');
    }
}
