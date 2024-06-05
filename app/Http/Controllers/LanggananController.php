<?php

namespace App\Http\Controllers;

use App\Models\Langganan;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LanggananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Langganan',
            'langganan' => Langganan::all()
        ];

        return view('admin.langganan.index',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'Detail langganan',
            'langganan' => Langganan::find($id)
        ];

        return view('admin.langganan.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Langganan',
            'langganan' => Langganan::find($id)
        ];

        return view('admin.langganan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $langganan = Langganan::findOrFail($request->id);
        $langganan->nama_langganan = $request->nama_langganan;
        $langganan->lama_langganan = $request->lama_langganan;
        $langganan->harga = $request->harga;
        $langganan->keuntungan_1 = $request->keu_1;
        $langganan->keuntungan_2 = $request->keu_2;
        $langganan->keuntungan_3 = $request->keu_3;
        $langganan->keuntungan_4 = $request->keu_4;
        $langganan->keuntungan_5 = $request->keu_5;
        $langganan->save();

        Session::flash('msg','Berhasil Mengubah Data');

        return redirect()->route('langganan.index');
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
