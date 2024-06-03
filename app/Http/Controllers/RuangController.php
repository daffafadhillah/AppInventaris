<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class RuangController extends Controller
{
    public function index()
    {
        $data = ruang::all();
        return view('ruang.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = ruang::all();
        return view('ruang.input', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('ruangs')->insert([
            'namaruang' => $request->namaruang,
            'koderuang' => $request->koderuang,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/ruang');
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
        $ruang = ruang::find($id); 

        return view("ruang.edit", compact('ruang')); 
    }

    public function update(Request $request)
    {
        DB::table('ruangs')->where('idruang', $request->idruang)->update([
        'namaruang' => $request->namaruang,
        'koderuang' => $request->koderuang,
        'keterangan' => $request->keterangan, 
    ]);

    return redirect('/ruang');
    }

    public function destroy(string $id)
    {
        DB::table('ruangs')->where('idruang',$id)->delete();
        return redirect('/ruang');
    }
}
