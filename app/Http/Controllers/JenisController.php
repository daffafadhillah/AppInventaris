<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $data = Jenis::with('petugas')->get();$data = DB::table('jenis')
    //     ->join('petugas', 'jenis.namapetugas', '=', 'petugas.namapetugas')
    //     ->select('jenis.*', 'petugas.namapetugas')
    //     ->get();

    //     return view('jenis.tampil', compact('data'));
    // }

    public function index()
    {
        $data = Jenis::all();
        return view('jenis.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Jenis::all();
        return view('jenis.input', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jenis')->insert([
            'namajenis' => $request->namajenis,
            'kodejenis' => $request->kodejenis,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/jenis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $jenis = Jenis::find($id);
        return view("jenis.edit", compact('jenis')); 
    }

    
    public function update(Request $request)
    {
    DB::table('jenis')->where('idjenis', $request->idjenis)->update([
        'namajenis' => $request->namajenis,
        'kodejenis' => $request->kodejenis,
        'keterangan' => $request->keterangan, 
    ]);

    return redirect('/jenis');
    }

    public function destroy(string $id)
    {
        DB::table('jenis')->where('idjenis',$id)->delete();
        return redirect('/jenis');
    }

    // public function edit(string $id)
    // {
    // $data = DB::table('jenis')->where('idjenis', $id)->first();
    // $petugas = Petugas::all();
    // $detail_petugas = $petugas->map(function($item) {
    //     return [
    //         'idpetugas' => $item->idpetugas,
    //         'namapetugas' => $item->namapetugas
    //     ];
    // });

    // // Mengirimkan data ke view dengan kunci yang benar
    // return view("jenis.edit", ['jenis' => $data, 'detail_petugas' => $detail_petugas]);
    // }
    /**
     * Update the specified resource in storage.
     */
}
