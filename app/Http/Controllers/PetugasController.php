<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $data = Petugas::with('Level')->get();$data = DB::table('Petugas')
        ->join('levels', 'petugas.idlevel', '=', 'levels.idlevel')
        ->select('petugas.*', 'levels.namalevel')
        ->get();

        return view('petugas.tampil', compact('data'));
    }

    public function create()
    {
        $level = Level::all();
        $data = $level->map(function($item){
            return[
                'idlevel' => $item->idlevel,
                'namalevel' => $item->namalevel
            ];
        });

        return view('petugas.input', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namapetugas' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:petugas,username',
            'password' => 'required|string|min:6',
            'idlevel' => 'required|integer|exists:levels,idlevel'
        ]);

        DB::table('petugas')->insert([
            'namapetugas' => $request->namapetugas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'idlevel' => $request->idlevel
        ]);

        return redirect('/petugas');
    }

    public function show(petugas $petugas)
    {
        
    }

    public function edit(string $id)
    {
        $petugas = DB::table('petugas')->where('idpetugas', $id)->first(); // Mengambil satu objek
        $level = Level::all();
        $detail_level = $level->map(function($item) {
            return [
                'idlevel' => $item->idlevel,
                'namalevel' => $item->namalevel
            ];
        });

        return view("petugas.edit", compact('petugas', 'detail_level'));
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'idpetugas' => 'required|exists:petugas,idpetugas',
            'namapetugas' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'idlevel' => 'required|exists:levels,idlevel',
        ]);

        $petugas = Petugas::findOrFail($request->idpetugas);
        $petugas->namapetugas = $request->namapetugas;
        $petugas->username = $request->username;
        if (!empty($request->password)) {
            $petugas->password = Hash::make($request->password);
        }
        $petugas->idlevel = $request->idlevel;
        $petugas->save();

        return redirect('/petugas')->with('success', 'Data petugas berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect('/petugas')->with('success', 'Data petugas berhasil dihapus');
    }
}
