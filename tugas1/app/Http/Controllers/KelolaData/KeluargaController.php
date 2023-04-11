<?php

namespace App\Http\Controllers\KelolaData;

use App\Models\Keluarga;
use App\Http\Controllers\Controller;

class KeluargaController extends Controller
{
    function index(){
        $data['list_keluarga'] = Keluarga::all();
        return view('content.keloladata.keluarga.index', $data);
    }
    function create(){
        return view('content.keloladata.keluarga.create');
    }
    function store()
    {
        // $keluarga = keluarga::find(request('nik'));
        // if($keluarga) return back();
        $keluarga = new Keluarga();
        $keluarga->no_kk = request('no_kk');
        $keluarga->kepala = request('kepala');
        $keluarga->desa = request('desa');
        $keluarga->rt = request('rt');
        $keluarga->rw = request('rw');
        $keluarga->kec = request('kec');
        $keluarga->kab = request('kab');
        $keluarga->prov = request('prov');
        $keluarga->save();

        return redirect('keluarga');
    }

    function edit(Keluarga $keluarga)
    {
        $data['keluarga'] =  $keluarga;
        return view('content.keloladata.keluarga.edit', $data);
    }
    function update(Keluarga $keluarga)
    {
        $keluarga->no_kk = request('no_kk');
        $keluarga->kepala = request('kepala');
        $keluarga->desa = request('desa');
        $keluarga->rt = request('rt');
        $keluarga->rw = request('rw');
        $keluarga->kec = request('kec');
        $keluarga->kab = request('kab');
        $keluarga->prov = request('prov');
        $keluarga->save();

        return redirect('keluarga');
    }
    function destroy(Keluarga $keluarga)
    {
        $keluarga->delete();
        return redirect('keluarga');
    }
}
