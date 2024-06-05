<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Langganan;
use Illuminate\Support\Facades\Session;
use App\Models\Atlet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.payment');
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
        $atlet = new Atlet;

        $request->validate([
            'bukti_tf' => 'image|mimes:png,jpg,jpeg',
        ]);

        if ($request->file('bukti_tf')) {
            $foto = $request->file('bukti_tf');
            $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads'), $fotoName);
            $atlet->bukti_tf = $fotoName;
        }
        $atlet->nama = $request->nama;
        $atlet->email = $request->email;
        $atlet->alamat = $request->alamat;
        $atlet->idlangganan = $request->langganan;
        $atlet->no_telp = $request->telp;
        $atlet->status = '0';
        $atlet->save();

        Session::flash('msg','Berhasil membeli tunggu kami akan melakukan verifikasi, mohon cek berkala email anda.');
        Session::flash('success','berhasil');
        return redirect()->route('payment.show', $request->langganan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $langganan = Langganan::findOrFail($id);
        $total = $langganan->harga * 1.11;
        return view('front.payment', compact('langganan', 'total'));
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
