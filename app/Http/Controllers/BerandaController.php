<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Pegawai;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{
    public function index()
    {

        $jumlahUserBaru = Petugas::count();
        $jumlahPegawai = Pegawai::count();
        $jumlahInventaris = Inventaris::count();

        return view('beranda', [
            'jumlahUserBaru' => $jumlahUserBaru,
            'jumlahPegawai' => $jumlahPegawai,
            'jumlahInventaris' => $jumlahInventaris,
        ]);
    }
}
