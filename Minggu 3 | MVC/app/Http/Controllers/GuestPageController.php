<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: method dipanggil saat mengakses url /user (GET|HEAD)
        return "Method ini digunakan untuk mengambil semua data user";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO: method dipanggil saat mengakses url /user/create (GET|HEAD)
        return "Method ini digunakan untuk menampilkan form untuk menambah data user";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: method dipanggil saat mengakses url /user (POST)
        return "Method ini digunakan untuk melakukan proses tambah data user";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO: method dipanggil saat mengakses url /user/{user} (GET|HEAD)
        return "Method ini digunakan untuk menampilkan data user " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // TODO: method dipanggil saat mengakses url /user/{user}/edit (GET|HEAD)
        return "Method ini digunakan untuk menampilkan form untuk mengubah data " . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO: method dipanggil saat mengakses url /user/{user}/edit (PUT|PATCH)
        return "Method ini digunakan untuk melakukan proses update data " .$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO: method dipanggil saat mengakses url /user/{user} (DELETE)
        return "Method ini digunakan untuk melakukan hapus data " . $id;
    }
}
