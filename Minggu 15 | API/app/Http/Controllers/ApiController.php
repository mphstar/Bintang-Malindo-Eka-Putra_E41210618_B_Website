<?php

namespace App\Http\Controllers;

use App\Models\PengalamanKerja;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function show_data(){
        $data = PengalamanKerja::all();
        return Response()->json($data, 200);
    }

    public function show_data_id($id){
        $data = PengalamanKerja::where('id', $id)->first();
        return Response()->json($data, 200);
    }

    public function add_data(Request $request){
        // TODO: Proses validasi
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'jabatan' => 'required',
            'tahun_masuk' => 'required|max:4',
            'tahun_keluar' => 'required|max:4'
        ]);

        if($validator->fails()){
            return Response()->json([
                "status" => "error",
                "message" => "Gagal Menambahkan Data"
            ]);
        }

        $data = new PengalamanKerja;
        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->tahun_keluar = $request->tahun_keluar;
        $data->save();

        return Response()->json([
            "status" => "success",
            "message" => "Berhasil Menambahkan Data",
            "data" => $request->all()
        ]);
    }

    public function update_data(Request $request){
        // TODO: Proses validasi
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nama' => 'required|string',
            'jabatan' => 'required',
            'tahun_masuk' => 'required|max:4',
            'tahun_keluar' => 'required|max:4'
        ]);

        if($validator->fails()){
            return Response()->json([
                "status" => "error",
                "message" => "Gagal Mengubah Data"
            ]);
        }

        // find digunakan untuk mencari data berdasarkan primary key nya
        $data = PengalamanKerja::find($request->id);
        if($data){
            $data->nama = $request->nama;
            $data->jabatan = $request->jabatan;
            $data->tahun_masuk = $request->tahun_masuk;
            $data->tahun_keluar = $request->tahun_keluar;
            $data->save();

            return Response()->json([
                "status" => "success",
                "message" => "Berhasil Mengubah Data",
                "data" => $request->all()
            ]);
        } 
        
        return Response()->json([
            "status" => "error",
            "message" => "ID tidak ditemukan"
        ]);

    }

    public function delete_data(Request $request){
        // TODO: Proses validasi
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return Response()->json([
                "status" => "error",
                "message" => "Gagal Mengubah Data"
            ]);
        }

        // find digunakan untuk mencari data berdasarkan primary key nya
        $data = PengalamanKerja::find($request->id);
        if($data){
            $data->delete();

            return Response()->json([
                "status" => "success",
                "message" => "Berhasil Menghapus Data",
            ]);
        } 
        
        return Response()->json([
            "status" => "error",
            "message" => "ID tidak ditemukan"
        ]);

    }
}
