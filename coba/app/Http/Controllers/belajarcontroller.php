<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajarcontroller extends Controller
{
    function index()
    {
        $judul = "Pilpres 2024";
        $capres1 = "Ngatimin";
        $capres2 = "rijal";
        $cawapres1 = "Hartono";
        $cawapres2 = "Mariya";
        return view('Pilpres', compact('judul', 'capres1', 'capres2', 'cawapres1', 'cawapres2'));
    }
    
}
