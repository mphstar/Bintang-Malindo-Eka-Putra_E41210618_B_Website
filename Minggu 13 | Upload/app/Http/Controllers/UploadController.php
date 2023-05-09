<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function upload(){
        // Menampilkan view upload
        return view('upload');
    }

    public function proses_upload(Request $request){
        // Proses validasi
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        // Mengambil file dengan nama file pada Request
        $file = $request->file('file');

        // Mengambil nama file
        echo "File Name: " . $file->getClientOriginalName() . "<br>";
        // Mengambil extension file
        echo "File Extension: " . $file->getClientOriginalExtension() . "<br>";
        // Mengambil Real path file ( biasanya tersimpan di temp )
        echo "File Real Path: " . $file->getRealPath() . "<br>";
        // Mengambil size file
        echo "File Size: " . $file->getSize() . "<br>";
        // Mengambil file mime type
        echo "File Mime Type: " . $file->getMimeType();

        $tujuan_file = 'data_file';

        // Proses memindahkan gambar yang diupload kedalam laravel
        $file->move($tujuan_file, $file->getClientOriginalName());
    }

    public function resize(){
        // Menamplkan view resize
        return view('resize');
    }

    public function proses_resize(Request $request){
        // proses validasi
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        $path = public_path('img/logo');

        // cek jika tidak aja folder, maka akan dibuatkan dengan permission folder 0777
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true);
        }

        // mengambil file dari request
        $file = $request->file('file');

        // menyesuaikan nama file
        $filename = 'logo_' . uniqid() . '.' . $file->getClientOriginalExtension();

        // Membuat canvas image dengan menggunakan library tambahan
        $canvas = Image::canvas(200, 200);

        // resize image sesuai dimensi dengan mempertahankan ratio
        $resizeImage = Image::make($file)->resize(null, 200, function($constraint){
            $constraint->aspectRatio();
        });

        // Memasukkan image yang telah dimasukkan ke dalam canvas
        $canvas->insert($resizeImage, 'center');

        // Simpan image ke folder
        if($canvas->save($path . '/' . $filename )){
            return redirect()->route('resize')->with('success', 'Data Berhasil Ditambahkan!');
        } else {
            return redirect()->route('resize')->with('error', 'Data Gagal Ditambahkan!');
        }

    }

    public function dropzone(){
        // Menampilkan view dropzone
        return view('dropzone');
    }

    public function proses_dropzone(Request $request){
        // mengambil file dari request
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();

         // proses memindahkan file yang diupload ke folder
        $image->move(public_path('img/dropzone'), $imageName);

        // Mengirimkan json berupa result
        return response()->json(['success' => $imageName]);

    }

    public function pdf(){
        return view('pdf');
    }

    public function proses_pdf(Request $request){
        // mengambil file dari request
        $pdf = $request->file('file');

        $imageName = "pdf_" . time() . '.' . $pdf->extension();

        // proses memindahkan file yang diupload ke folder
        $pdf->move(public_path('pdf/dropzone'), $imageName);

        // Mengirimkan json berupa result
        return response()->json(['success' => $imageName]);

    }
}
