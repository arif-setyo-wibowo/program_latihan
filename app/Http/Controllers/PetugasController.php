<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Petugas',
            'petugas' => Petugas::all()
        ];
        return view('admin.petugas.index',$data);
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'unique:petugas',
        ]);
        $user = new Petugas;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        Session::flash('msg', 'Berhasil Menambah Data');
        return redirect()->route('petugas.index');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Petugas',
            'petugas' => Petugas::find($id)
        ];

        return view('admin.petugas.edit',$data);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = [
            'title' => 'Rontgen'
        ];
        return view('admin_rontgen_detail',$data);
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
        $user = Petugas::find($request->id);

            $request->validate([
                'username'=> Rule::unique('petugas')->ignore($user->id)
            ]);

            if($request->password == null){
                $password = $request->password_lama;
            }else{
                $password = Hash::make($request->password);
            }

            if ($request->nama_user == null) {
                session(['nama.admin' => $user->nama_user]);
            }else{
                session()->forget('nama.admin');
                session(['nama.admin' => $request->nama_user]);
            }

            $user->nama = $request->nama;
            $user->username = $request->username;
            $user->password = $password;
            $user->role = $request->role;
            $user->save();


            Session::flash('msg', 'Berhasil Mengubah Data');
            return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $id = $request->query('id');
        $petugas = Petugas::find($id);
        $petugas->delete();
        Session::flash('msg', 'Berhasil Menghapus Data Petugas');
        return redirect()->route('admin.petugas');
    }
}
