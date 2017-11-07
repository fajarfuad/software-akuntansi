<?php

namespace App\Http\Controllers;

use App\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Cabang::all();
        return view('cabang.index',['index' => $index]);
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
        $store = new Cabang;
        $store->kode = $request->kode;
        $store->nama = $request->nama;
        $store->alamat = $request->alamat;
        $store->no_tlp = $request->no_tlp;
        $store->fax = $request->fax;
        $store->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function show(Cabang $cabang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabang $cabang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $update = Cabang::find($id);
      $update->kode = $request->kode;
      $update->nama = $request->nama;
      $update->alamat = $request->alamat;
      $update->no_tlp = $request->no_tlp;
      $update->fax = $request->fax;
      $update->save();

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Cabang::find($id);
        $destroy->delete();

        return back();
    }
}
