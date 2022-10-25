<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use Illuminate\Http\Request;

class PemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemohons = pemohon::latest()->paginate(5);
        return view('pemohons.index',compact('pemohons','pemohons'))
                ->with('i',(request()->input('page', 1)- 1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemohons.create');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        $request->validate([

            'nama_pemohon' => 'required',
            'email'=> 'required',
            'no_telp'=> 'required',
            'asal_intansi'=> 'required'
        ]);
        pemohon::create($request->all());
        return redirect()->route('pemohons.index')
                    ->with('succes','berhasil menyimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function show(Pemohon $pemohon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemohon $pemohon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemohon $pemohon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemohon $pemohon)
    {
        //
    }
}
