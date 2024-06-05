<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Cabor;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'olahraga' => Cabor::all(),
            'kategori' => Kategori::with("cabor")->get(),
        ];
        return view('admin.kategori.index',$data);
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
        $kategori = new Kategori;
        $kategori->idcabor = $request->idcabor;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        Session::flash('msg', 'Berhasil Menambah Data Kategori');
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Kategori',
            'olahraga' => Cabor::all(),
            'kategori' => Kategori::find($id)->load('cabor')
        ];

        return view('admin.kategori.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $kategori = Kategori::findOrFail($request->id);
        $kategori->idcabor = $request->idcabor;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        Session::flash('msg', 'Berhasil Mengubah Data');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();
            Session::flash('msg', 'Berhasil Menghapus Data');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('error', 'Gagal menghapus data. Data ini masih terhubung dengan data lain.');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data.');
        }

        return redirect()->route('kategori.index');
    }
}
