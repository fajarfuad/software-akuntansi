<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mitra.index', ['kontak' => Kontak::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Kontak;
        $store->kode = $request->kode;
        $store->nama = $request->nama;
        $store->alamat = $request->alamat;
        $store->no_tlp = $request->no_tlp;
        $store->email = $request->email;
        $store->bank = $request->bank;
        $store->no_rek = $request->no_rek;
        $store->npwp = str_replace("-", "", $request->npwp);
        $store->is_supplier = $request->supplier;
        $store->is_customer = $request->customer;
        $store->is_collector = $request->collector;
        $store->is_karyawan = $request->karyawan;
        $store->save();

        return back()->with('success','Data Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        $get = Kontak::find($kontak);
        return view('mitra.edit', ['kontak' => $get]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $update = Kontak::find($id);
      $update->kode = $request->kode;
      $update->nama = $request->nama;
      $update->alamat = $request->alamat;
      $update->no_tlp = $request->no_tlp;
      $update->email = $request->email;
      $update->bank = $request->bank;
      $update->no_rek = $request->no_rek;
      $update->npwp = str_replace("-", "", $request->npwp);
      $update->is_supplier = $request->supplier;
      $update->is_customer = $request->customer;
      $update->is_collector = $request->collector;
      $update->is_karyawan = $request->karyawan;
      $update->save();

      return back()->with('success', 'Data Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hapus = Kontak::find($id);
      $hapus->delete();

      return back();
    }
}
