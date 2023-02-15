<?php

namespace App\Http\Controllers;

use App\Models\AdminKamar;
use App\Models\AdminFasHotel;
use Illuminate\Http\Request;

class AdminKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $admin = AdminKamar::get();
         $fas_hotel = AdminFasHotel::get();
        return view('admin.kamar.admin', compact('admin', 'fas_hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.kamar.kamar-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $message = [
            'required' => 'Belum diisi',
            'unique' => 'Tidak boleh sama!'
        ];

        $request->validate([
            'tipe_kamar' => 'required',
            'jml_kamar' => 'required',
        ], $message);

        AdminKamar::create([
            'tipe_kamar' => $request->tipe_kamar,
            'jml_kamar' => $request->jml_kamar,
        ]);
        return redirect('/admin-kamar')->with('pesan', 'Kamar baru berhasil ditambahkan');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         $message = [
            'required' => 'Belum diisi',
            'unique' => 'Tidak boleh sama!',
            'min' => 'minimal :min karakter',
            'max' => 'maksimal :max karakter',
        ];

        $request->validate([
            'tipe_kamar' => 'required|unique:admin_kamar,tipe_kamar,' . $id,
        ], $message);

        $admin = AdminKamar::find($id);

        $admin->update([
           'tipe_kamar' => $request->tipe_kamar,
            'jml_kamar' => $request->jml_kamar,
        ]);
        return redirect('/admin-kamar')->with('pesan', 'Barang berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
