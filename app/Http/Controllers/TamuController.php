<?php

namespace App\Http\Controllers;

use App\Models\AdminKamar;
use App\Models\AdminFasHotel;
use App\Models\AdminFasKamar;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = AdminKamar::with('AdminFasKamar')->get();
        $fas_hotel = AdminFasHotel::get();
        $fas_kamar = AdminFasKamar::with('AdminKamar')->get();
        $tamu = Tamu::with('AdminKamar')->get();
        return view('tamu.tamu', compact('tamu', 'admin', 'fas_hotel', 'fas_kamar'));
    }

    public function booking()
    {
        $admin = AdminKamar::get();
        return view('tamu.booking', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'nama_pemesan' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nama_tamu' => 'required',
            'tgl_checkin' => 'required',
            'tgl_checkout' => 'required',
            'jml_kamar' => 'required',
        ], $message);
        $kamar = AdminKamar::find($request->tipe_kamar);
        $kamar->update([
            'jml_kamar' => $kamar->jml_kamar - $request->jml_kamar,
        ]);
        $code = 'HEBAT-' . mt_rand(00000,99999);
        Tamu::create([
            'tipe_kamar_id' => $request->tipe_kamar,
            'nama_pemesan' => $request->nama_pemesan,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nama_tamu' => $request->nama_tamu,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'jml_kamar' => $request->jml_kamar,
            'code' => $code,
        ]);
        return redirect('/invoice')->with('pesan', 'Pesan kamar telah berhasil');
    }

    public function invoice(){
        $invoice = Tamu::with('AdminKamar')->latest()->first();
        return view('tamu.invoice', compact('invoice'));
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
        //
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
