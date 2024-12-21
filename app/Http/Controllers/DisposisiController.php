<?php

namespace App\Http\Controllers;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    //
    public function store(Request $request)
{
    $request->validate([
        'nomor_naskah' => 'required',
        'tanggal_naskah' => 'required',
        'sifat' => 'required',
        'dari' => 'required',
        'hal' => 'required',
    ]);

    SuratMasuk::create([
        'nomor_naskah' => $request->nomor_naskah,
        'tanggal_naskah' => $request->tanggal_naskah,
        'sifat' => $request->sifat,
        'dari' => $request->dari,
        'hal' => $request->hal,
    ]);

    return redirect()->route('disposisi.index')->with('success', 'Data berhasil disimpan');
}

}