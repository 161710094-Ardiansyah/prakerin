<?php

namespace App\Http\Controllers;

use App\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fasilitas = fasilitas::all();
        return view('fasilitas.index',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            
        ]);
        $fasilitas = new fasilitas;
        $fasilitas->judul = $request->judul;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->gambar = $request->gambar;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        return view('fasilitas.show',compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fasilitas = fasilitas::findOrFail($id);
        return view('fasilitas.edit',compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            
        ]);
        $fasilitas = fasilitas::findOrFail($id);        
        $fasilitas->judul = $request->judul;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->gambar = $request->gambar;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');
    }
}
