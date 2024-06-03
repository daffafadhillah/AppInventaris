<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class PegawaiController extends Controller
{
    public function index(){
        $data = Pegawai::all();
        return view('pegawai.tampil', compact('data'));
    }

    public function create(){
        $data = Pegawai::all();
        return view('Pegawai.input', compact('data'));
    }

    public function store(Request $request){
        DB::table('pegawais')->insert([
            'namapegawai' => $request->namapegawai,
            'nip' => $request->nip,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit(string $id)
    {
        $pegawai = Pegawai::find($id); 

        return view("pegawai.edit", compact('pegawai')); 
    }

    public function update(Request $request)
    {
        DB::table('pegawais')->where('idpegawai', $request->idpegawai)->update([
        'namapegawai' => $request->namapegawai,
        'nip' => $request->nip,
        'alamat' => $request->alamat, 
    ]);

    return redirect('/pegawai');
    }

    public function destroy(string $id)
    {
        DB::table('pegawais')->where('idpegawai',$id)->delete();
        return redirect('/pegawai');
    }
}
