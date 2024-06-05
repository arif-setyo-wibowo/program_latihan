<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cabor;
use App\Models\Kategori;
use App\Models\Materi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front/landing');
    }

    public function home(Request $request)
    {
        $cabor = Cabor::all();

        //filter cabor
        $param = $request->query('cabor');
        if ($param == null){
            $materi = Materi::all();
        }else{
            if($param == "All"){
                $materi = Materi::all();
            }else{
                $materi = Materi::whereHas('cabor', function ($query) use ($param) {
                    $query->where('nama_cabor', $param);
                })->get();
            }
        }

        return view('front/home', compact('materi', 'cabor'));
    }

    public function course($id)
    {
        $cabor = Cabor::all();
        $kategori = Kategori::all();
        $materi = Materi::find($id);

        return view('front/course');
    }
}
