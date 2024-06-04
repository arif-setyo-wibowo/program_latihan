<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Cabor;
use App\Models\Kategori;
use App\Models\Petugas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Materi',
            'olahraga' => Cabor::all(),
            'kategori' => Kategori::all(),
            'materi' => Materi::with("cabor","kategori","petugas")->get()
        ];
        return view('admin.materi.index',$data);
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
        $materi = new Materi;

        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg',
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads'), $fotoName);
            $materi->foto = $fotoName;
        }

        $materi->idcabor = $request->idcabor;
        $materi->idkategori = $request->idkategori;
        $materi->iduser = "1";
        $materi->judul = $request->judul;
        if($request->link == null){
            $link  = "-";
        }else{
            $link = $request->link;
        }
        $materi->link = $link;
        $materi->isi =  $request->isi;
        $materi->save();

        Session::flash('msg', 'Berhasil Menambah Data');

        return redirect()->route('materi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'Edit Materi',
            'olahraga' => Cabor::all(),
            'kategori' => Kategori::all(),
            'materi' => Materi::find($id)->with("cabor","kategori","petugas")->first()
        ];

        return view('admin.materi.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Materi',
            'olahraga' => Cabor::all(),
            'kategori' => Kategori::all(),
            'materi' => Materi::find($id)->with("cabor","kategori","petugas")->first()
        ];

        return view('admin.materi.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $materi = Materi::find($request->id);

        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg',
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads'), $fotoName);
            File::delete('uploads/'.$materi->foto);
            $materi->foto = $fotoName;
        }else{
            $materi->foto = $request->fotoawal;
        }

        $materi->idcabor = $request->idcabor;
        $materi->idkategori = $request->idkategori;
        $materi->iduser = "1";
        $materi->judul = $request->judul;
        if($request->link == null){
            $link  = "-";
        }else{
            $link = $request->link;
        }
        $materi->link = $link;
        $materi->isi = $request->isi;
        $materi->save();

        Session::flash('msg', 'Berhasil Mengubah Data');

        return redirect()->route('materi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $materi = Materi::find($id);
            $materi->delete();
            File::delete('uploads/'.$materi->foto);
            Session::flash('msg', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data. Data tersebut masih digunakan dalam tabel lain.');
        }

        return redirect()->route('materi.index');
    }

    public function fetchCategories($idCabor)
    {
        $kategori = Kategori::where('idcabor', $idCabor)->get();
        return response()->json($kategori);
    }


}
