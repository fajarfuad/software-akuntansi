<?php

namespace App\Http\Controllers;

use App\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Akun::all();

        return view('akun.index', ['index' => $index]);
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
        $s = new Akun;
        $s->kode_rek = $request->kode;
        $s->nama = $request->nama;
        $s->tipe = $request->tipe;
        $s->level = $request->level;
        $s->normal = $request->normal;
        $s->posisi = $request->posisi;
        $s->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $up = Akun::find($id);
        $up->kode_rek = $request->kode;
        $up->nama = $request->nama;
        $up->tipe = $request->tipe;
        $up->level = $request->level;
        $up->normal = $request->normal;
        $up->posisi = $request->posisi;
        $up->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Akun::find($id);
        $hapus->delete();

        return back();
    }
}
