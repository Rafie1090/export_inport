<?php

namespace App\Http\Controllers;

use App\Models\Kebutuhan;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhans = kebutuhan::latest()->paginate(5);
        return view('kebutuhans.index',compact('kebutuhans','kebutuhans'))
                ->with('i',(request()->input('page', 1)- 1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kebutuhans.create');
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
            'anggaran'=> 'required',
            'kebutuhan'=> 'required',
            'qty'=> 'required'
        ]);
        kebutuhan::create($request->all());
        return redirect()->route('kebutuhans.index')
                    ->with('succes','berhasil menyimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show(Kebutuhan $kebutuhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebutuhan $kebutuhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebutuhan $kebutuhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebutuhan $kebutuhan)
    {
        //
    }
}
