<?php

namespace App\Http\Controllers;

use App\Models\Cabor;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Cabor',
            'olahraga' => Cabor::all()
        ];
        return view('admin.cabor.index',$data);
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
        $cabor = new Cabor;
        $cabor->nama_cabor = $request->olahraga;
        $cabor->save();

        Session::flash('msg', 'Berhasil Menambah Data');
        return redirect()->route('cabor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cabor  $cabor
     * @return \Illuminate\Http\Response
     */
    public function show(Cabor $cabor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabor  $cabor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Cabor',
            'olahraga' => Cabor::where('id',$id)->get()
        ];

        return view('admin.cabor.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabor  $cabor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cabor = Cabor::find($request->id);
        $cabor->nama_cabor = $request->olahraga;
        $cabor->save();

        Session::flash('msg', 'Berhasil Menambah Data');
        return redirect()->route('cabor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabor  $cabor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $cabor = Cabor::findOrFail($id);
            $cabor->delete();
            Session::flash('msg', 'Berhasil Menghapus Data');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('error', 'Gagal menghapus data. Data ini masih terhubung dengan data lain.');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data.');
        }

        return redirect()->route('cabor.index');
    }
}
