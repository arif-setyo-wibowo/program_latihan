<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cabor;
use App\Models\Kategori;
use App\Models\Materi;
use App\Models\Langganan;
use App\Models\Atlet;
use App\Models\pembelian;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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

        $email = session('user.email');

        $atlet = DB::table('atlet')
                ->where('email', $email)
                ->where('status', 1)
                ->first();

        if ($atlet) {
                $pembelian = Pembelian::where('idlangganan', $atlet->id)->first();

                if ($pembelian) {
                    // Ambil tanggal sekarang
                    $now = Carbon::now();

                    // Cek status langganan
                    if ($pembelian->status_langganan == 1) {
                        if ($now->lte($pembelian->tanggal_akhir)) {
                            return view('front/home', compact('materi', 'cabor'));
                        } else {
                            $pembelian->status_langganan = 0;
                            $pembelian->save();

                            DB::table('atlet')
                                ->where('id', $atlet->id)
                                ->update(['status' => 3]);
                            return redirect()->route('logout.front')->with('message', 'Subscription Anda sudah habis.');
                        }
                    }
                }
        }

        return redirect()->route('login.front')->with('message', 'Subscription Anda sudah habis.');
    }

    public function course($id)
    {
        $id_cabor = Materi::find($id)->idcabor;
        $kategori = Kategori::where('idcabor', $id_cabor)->get();

        $materi = Materi::where('idcabor', $id_cabor)->get();
        $materi_now = Materi::find($id);

        return view('front/course', compact('kategori', 'materi', 'materi_now'));
    }

    public function profil()
    {

        $user_id = Session::get('user.email');
        $atlet = Atlet::where('email',$user_id)->get();
        return view('front.profile', compact('atlet'));
    }

}
