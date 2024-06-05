<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\AtletLogin;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class AtletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Atlet',
            'atlet' => Atlet::with("langganan")->where('status','0')->get()
        ];
        return view('admin.atlet.index',$data);
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
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'Detail Atlet',
            'atlet' => Atlet::find($id)->load('langganan')
        ];

        return view('admin.atlet.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Atlet $atlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $action = $request->action;

        if ($action == 'terima') {
            // Temukan atlet berdasarkan ID dan set statusnya menjadi '1'
            $atlet = Atlet::find($request->atlet);
            $atlet->status = '1';
            $atlet->save();

            // Buat pembelian baru
            $pembelian = new Pembelian;
            $pembelian->idatlet = $request->atlet;
            $pembelian->idlangganan = $atlet->idlangganan;
            $pembelian->tanggal_awal = now();

            // Tentukan tanggal akhir berdasarkan jenis langganan
            if ($atlet->idlangganan == 1) {
                $tanggal = $pembelian->tanggal_awal->addMonths(1);
            } elseif ($atlet->idlangganan == 2) {
                $tanggal = $pembelian->tanggal_awal->addMonths(6);
            } elseif ($atlet->idlangganan == 3) {
                $tanggal = $pembelian->tanggal_awal->addYear();
            }
            $pembelian->tanggal_akhir = $tanggal;
            $pembelian->status_langganan = '1';
            $pembelian->save();

            // Periksa apakah akun sudah ada berdasarkan alamat email
            $akun = AtletLogin::where('email', $atlet->email)->first();

            if (!$akun) {
                // Jika akun belum terdaftar, buat akun baru dan kirim email
                $password = "12345678"; // Generate random password
                $akun = new AtletLogin;
                $akun->email = $atlet->email;
                $akun->password = Hash::make($password); // Encrypt password using bcrypt
                $akun->status = '1';
                $akun->save();

                // Kirim email akun baru
                Mail::send('email.account_created', ['password' => $password], function ($message) use ($atlet) {
                    $message->to($atlet->email)->subject('Akun Baru Telah Dibuat');
                });

                // Kirim email akun baru dengan view lain (opsional)
                Mail::to($atlet->email)->send(new AccountCreated($atlet->email, $password));
            }

            // Kirim email pembelian sukses
            Mail::send('email.purchase_success', ['atlet' => $atlet], function ($message) use ($atlet) {
                $message->to($atlet->email)->subject('Pembelian Langganan Berhasil');
            });

            return redirect()->route('atlet.index');
        } elseif ($action == 'tolak') {
            // Logika untuk penolakan pembayaran
            // Kamu dapat menambahkan logika di sini jika diperlukan
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atlet $atlet)
    {
        //
    }
}
