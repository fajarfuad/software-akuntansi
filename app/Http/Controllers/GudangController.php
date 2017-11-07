<?php

namespace App\Http\Controllers;

use App\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Gudang::all();
        return view('gudang.index', ['index' => $index]);
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
        $store = new Gudang;
        $store->kode = $request->kode;
        $store->nama = $request->nama;
        $store->alamat = $request->alamat;
        $store->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gudang $gudang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $update = Gudang::find($id);
      $update->kode = $request->kode;
      $update->nama = $request->nama;
      $update->alamat = $request->alamat;
      $update->save();

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $down = Gudang::find($id);
      $down->delete();

      return back();
    }
}
