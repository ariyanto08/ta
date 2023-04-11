<?php

namespace App\Http\Controllers\Sirkulasi;

use App\Models\Kematian;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;

class MeninggalController extends Controller
{
    function index(){
        $data['list_meninggal'] = Kematian::all();
        $data['meninggal'] = Penduduk::get('nik','name');
        return view('content.sirkulasi.kematian.index', $data);
    }
    function create(){
        $data['penduduk'] = Penduduk::all();
        return view('content.sirkulasi.kematian.create',$data );
    }
    function store()
    {

        $meninggal = new Kematian();
        $meninggal->nik = request('nik');
        $meninggal->tgl_mendu = request('tgl_mendu');
        $meninggal->sebab = request('sebab');
        $meninggal->save();

       $id_pend = request('nik');
       $penduduk = Penduduk::find($id_pend=$id_pend);
       $penduduk->status = '2';
       $penduduk->save();

        return redirect('kematian');
    }
    function edit(Kematian $meninggal)
    {
        $data['meninggal'] =  $meninggal;
        return view('content.sirkulasi.kematian.edit', $data);
    }
    function update(Kematian $meninggal)
    {

        $meninggal->tgl_mendu = request('tgl_mendu');
        $meninggal->sebab = request('sebab');
        $meninggal->save();

        return redirect('kematian');
    }
    function destroy(Kematian $meninggal)
    {
        $meninggal->delete();
        return redirect('kematian');
    }

}
