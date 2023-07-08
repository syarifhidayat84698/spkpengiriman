<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller {

    public function index() {
        return view('datapeserta', [
            'users' => Peserta::all(),
            'title' => 'Data peserta'
        ]);
    }
    public function add() {
        return view('adddatapeserta',[
            'title' => 'Tambah Data peserta'
        ]);
    }
    public function edit($id){
        
        $peserta = Peserta::where('id', $id)->first();

        return view('editdatapeserta', [
            'peserta' => $peserta,
            'title' => 'Edit Data peserta'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_pengirim      = $request->input('nama_pengirim');
        $tanggal       = $request->input('tanggal');
        
        $peserta = Peserta::where('id', $id)->first();
        $peserta->nama_pengirim    = $nama_pengirim;
        $peserta->tanggal     = $tangaal;

        $peserta->save();

        return redirect()->to('/peserta');
    }


    public function dashboard(){
        $peserta= Peserta::count();

        return view('main', compact('peserta'));

    }

    public function store(Request $request) {
        $nama_pengirim      = $request->input('nama_pengirim');
        $tanggal       = $request->input('tanggal');
    
        $peserta           = new Peserta;
        $peserta->nama_pengirim    = $nama_pengirim;
        $peserta->tanggal     = $tanggal;
    
        $peserta->save();

        return redirect()->to('/peserta');
    }
    public function delete($id) {
        $peserta = Peserta::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }
}
