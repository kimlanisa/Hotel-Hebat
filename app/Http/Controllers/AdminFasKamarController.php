<?php

namespace App\Http\Controllers;

use App\Models\AdminFasKamar;
use App\Models\AdminKamar;
use Illuminate\Http\Request;

class AdminFasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = AdminKamar::get();
        $fas_kamar = AdminFasKamar::get();
        return view('admin.fas-kamar.fas-kamar', compact('fas_kamar', 'admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = AdminKamar::get();
        return view ('admin.fas-kamar.fas-kamar-tambah', compact('admin'));
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
            'nama_fasilitas' => 'required',
        ], $message);



       $dtUpload = new AdminFasKamar;
       $dtUpload->tipe_kamar_id = $request->tipe_kamar_id;
       $dtUpload->nama_fasilitas = $request->nama_fasilitas;
    
    
        $dtUpload->save();


        return redirect('/fas-kamar')->with('pesan', 'Fasilitas kamar baru berhasil ditambahkan');
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
            'unique' => 'Tidak boleh sama!'
        ];

        $request->validate([
             'nama_fasilitas' => 'required|unique:admin_fas_kamar,id,' . $id,
        ], $message);

        $fas_kamar = AdminFasKamar::find($id);
        $nm = $request->gambar;
        if ($request->file()) {
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalExtension();
        $nm->move(public_path().'/img', $namaFile);
        } else {
            $namaFile = $request->url;
        };
        
        $fas_kamar->update([
            'tipe_kamar_id' => $request->tipe_kamar_id,
            'nama_fasilitas' => $request->nama_fasilitas,
            'gambar' => $namaFile
        ]);
        return redirect('/admin-fas-kamar')->with('pesan', 'Fasilitas Kamar berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AdminFasKamar::findOrFail($id);
        $item->delete();
        return redirect('/admin-fas-kamar')->with('pesan', 'Fasilitas Kamar berhasil di hapus');
    }
}
