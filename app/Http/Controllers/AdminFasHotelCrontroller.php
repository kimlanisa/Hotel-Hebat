<?php

namespace App\Http\Controllers;

use AdminKamar;
use App\Models\AdminFasHotel;
use Illuminate\Http\Request;

class AdminFasHotelCrontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fas_hotel = AdminFasHotel::get();
        return view('admin.fas-hotel.fas-hotel', compact('fas_hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.fas-hotel.fas-hotel-tambah');
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
            'nama_fas_hotel' => 'required',
            'ket_fas_hotel' => 'required',
            'gambar' => 'required'
        ], $message);

       $nm = $request->gambar;
       $namaFile = time().rand(100,900).".".$nm->getClientOriginalExtension();

       $dtUpload = new AdminFasHotel;
       $dtUpload->nama_fas_hotel = $request->nama_fas_hotel;
       $dtUpload->ket_fas_hotel = $request->ket_fas_hotel;
       $dtUpload->gambar = $namaFile;
        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->save();

        return redirect('/admin-fas-hotel')->with('pesan', 'Fasilitas hotel baru berhasil ditambahkan');
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
        $fas_hotel = AdminFasHotel::find($id);
        return view('admin.fas-hotel.fas-hotel-edit', compact('fas_hotel'));
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
            'nama_fas_hotel' => 'required|unique:admin_fas_hotel,nama_fas_hotel,' . $id,
            'ket_fas_hotel' => 'required',
        ], $message);

        $nm = $request->gambar;
      
       if ($request->file()) {
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalExtension();
        $nm->move(public_path().'/img', $namaFile);
        } else {
            $namaFile = $request->url;
        };
        $fas_hotel = AdminFasHotel::find($id);
       

        $fas_hotel->update([
            
           'nama_fas_hotel' => $request->nama_fas_hotel,
            'ket_fas_hotel' => $request->ket_fas_hotel,
            'gambar' => $namaFile,
        ]);
        
        return redirect('/admin-fas-hotel')->with('pesan', 'Barang berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AdminFasHotel::findOrFail($id);
        $item->delete();

        return redirect()->route('fas-hotel.index');
    }
}

