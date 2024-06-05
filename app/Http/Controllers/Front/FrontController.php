<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cabor;
use App\Models\Kategori;
use App\Models\Materi;
use App\Models\Langganan;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Program Atlet',
            'langganan' => Langganan::all()
        ];
        return view('front/landing',$data);
    }

    public function home(Request $request)
    {
        $cabor = Cabor::all();

        //filter cabor
        $param = $request->query('cabor');
        if ($param == null){
            $materi = Materi::paginate(16);
        }else{
            if($param == "All"){
                $materi = Materi::paginate(16);
            }else{
                $materi = Materi::whereHas('cabor', function ($query) use ($param) {
                    $query->where('nama_cabor', $param);
                })->paginate(64);
            }
        }

        return view('front/home', compact('materi', 'cabor'));
    }

    public function course($id)
    {
        $id_cabor = Materi::find($id)->idcabor;
        $kategori = Kategori::where('idcabor', $id_cabor)->get();

        $materi = Materi::where('idcabor', $id_cabor)->get();
        $materi_now = Materi::find($id);

        return view('front/course', compact('kategori', 'materi', 'materi_now'));
    }
}
