<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatoController4 extends Controller
{
    public function perfilGato(){
        $nomeGato="Robson";
        $idade = 7;
        $massa = 5;
        $dono = "Antonio";
        return view('robson')
        ->with('nomeDoGato', $nomeGato)
        ->with('idadeDoGato', $idade)
        ->with('massaDoGato', $massa)
        ->with('donoDoGato', $dono);
    }
}
