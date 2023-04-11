<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class HomeController  extends Controller
{

    function index()
    {
        return view('home.index');
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    // tabel tidak mampu
    function indexmiskin()
    {
        return view('content.kelolasurat.miskin.index');
    }
    function cetakmiskin()
    {
        $nama = request()->input('nama');
        $tempat_lh = request()->input('tempat_lh');
        $tgl_lh = request()->input('tgl_lh');
        $nik = request()->input('nik');
        $jekel = request()->input('jekel');
        $agama = request()->input('agama');
        $pekerjaan = request()->input('pekerjaan');
        $status = request()->input('status');
        $alamat = request()->input('alamat');
        $keperluan = request()->input('keperluan');
        $rt = request()->input('rt');
        $rw = request()->input('rw');
        $tgl_sur = request()->input('tgl_sur');
        return view('content.kelolasurat.surat.su-miskin.sumiskin',
         compact('nama', 'tempat_lh', 'tgl_lh', 'nik', 'jekel', 'agama', 'pekerjaan', 'status', 'alamat', 'rt', 'rw', 'tgl_sur', 'keperluan'));
    }


    // table mati
    function indexmati()
    {
        return view('content.kelolasurat.mati.index');
    }
    function cetakmati()
    {
        $nama = request()->input('nama');
        $tempat_lh = request()->input('tempat_lh');
        $tgl_lh = request()->input('tgl_lh');
        $nik = request()->input('nik');
        $jekel = request()->input('jekel');
        $agama = request()->input('agama');
        $pekerjaan = request()->input('pekerjaan');
        $status = request()->input('status');
        $alamat = request()->input('alamat');
        $rt = request()->input('rt');
        $rw = request()->input('rw');
        $tgl_sur = request()->input('tgl_sur');
        $hari = request()->input('hari');
        $tgl_mati = request()->input('tgl_mati');
        $tempat_mati = request()->input('tempat_mati');
        $sebab = request()->input('sebab');
        $tempat_makam = request()->input('tempat_makam');
        $nama_pelapor = request()->input('nama_pelapor');
        $nik_pelapor = request()->input('nik_pelapor');
        $tmp_lh_pelapor = request()->input('tmp_lh_pelapor');
        $tgl_lh_pelapor = request()->input('tgl_lh_pelapor');
        $pekerjaan_pelapor = request()->input('pekerjaan_pelapor');
        $alamat_pelapor = request()->input('alamat_pelapor');
        $hub_pelapor = request()->input('hub_pelapor');
        return view('content.kelolasurat.surat.su-mati.sumati',
         compact('nama', 'tempat_lh', 'tgl_lh', 'nik', 'jekel', 'agama', 'pekerjaan', 'status', 'alamat', 'rt', 'rw', 'tgl_sur', 'hari','tgl_mati','tempat_mati','sebab','tempat_makam','nama_pelapor','nik_pelapor','tmp_lh_pelapor','tgl_lh_pelapor','pekerjaan_pelapor','alamat_pelapor','hub_pelapor'));
    }
}
