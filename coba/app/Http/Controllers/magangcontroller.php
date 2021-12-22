<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class magangcontroller extends Controller
{
    function index()
    {

        $judul = 'data diri';
        $nama = 'muhammad febrian athaillah';
        $asal = 'surabaya';
        $tgl_lahir = '13 februari 2005';
        $hobi = 'main bola';
        return view('magang', compact('judul', 'nama', 'asal', 'tgl_lahir', 'hobi'));
    }
    function ardo()
    {
        $judul = 'data diri';
        $nama = 'moch.ardo firmansyah';
        $asal = 'surabaya';
        $tgl_lahir = '14 juli 2005';
        $hobi = 'ngaji';
        return view('magang', compact('judul', 'nama', 'asal', 'tgl_lahir', 'hobi' ));
    }
    function sekolah()
    {
        // return "test";
        $nama_sekolah = 'SMK 17 Agustus 1945';
        $alamat_sekolah = 'jalan nginden semolo no 44';
        $murid_sekolah1 = 'muhammad febrian athaillah';
        $murid_sekolah2 = 'moch ardo firmansyah';
        return view('sekolah', compact('nama_sekolah', 'alamat_sekolah', 'murid_sekolah1', 'murid_sekolah2'));
    }
}

