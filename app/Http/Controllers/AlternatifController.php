<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        $alternatif = Alternatif::where('id', $id)->first();

        return view('editalternatif', [
            'alternatif' => $alternatif,
            'title' => 'Edit Data alternatif'
        ]);

    }

    public function update(Request $request, $id) {
        $nama = $request->input('nama');
        $jenis_armada = $request->input('jenis_armada');
        $jangkauan = $request->input('jangkauan');
        $pengalamanusaha = $request->input('pengalamanusaha');
        $harga = $request->input('harga');
        $waktupengiriman = $request->input('waktupengiriman');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->nama = $nama;
        $alternatif->jenis_armada = $jenis_armada;
        $alternatif->jangkauan = $jangkauan;
        $alternatif->pengalamanusaha = $pengalamanusaha;
        $alternatif->waktupengiriman = $waktupengiriman;
        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $nama = $request->input('nama');
        $jenis_armada = $request->input('jenis_armada');
        $jangkauan = $request->input('jangkauan');
        $pengalamanusaha = $request->input('pengalamanusaha');
        $harga = $request->input('harga');
        $waktupengiriman = $request->input('waktupengiriman');

        $alternatif           = new Alternatif;
        $alternatif->nama = $nama;
        $alternatif->jenis_armada = $jenis_armada;
        $alternatif->jangkauan = $jangkauan;
        $alternatif->pengalamanusaha = $pengalamanusaha;
        $alternatif->harga = $harga;
        $alternatif->waktupengiriman = $waktupengiriman;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
