<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    public function index()
    {
        $tamus = BukuTamu::all();
        return view('index', compact('tamus'));
    }

    public function store(Request $request)
    {
        BukuTamu::create([
            'id_tamu'    => $request->id_tamu,
            'nama_tamu'   => $request->nama_tamu,
            'email'       => $request->email,
            'alamat'      => $request->alamat,
            'no_hp'       => $request->no_hp,
            'kepentingan' => $request->kepentingan,
            'tanggal'     => $request->tanggal,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }
}