<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatoController2 extends Controller
{
    public function perfilGato(){
        $nomeGato="Astolfo";
        $idade = 5;
        $massa = 4;
        $dono = "Antonio";
        return view('astolfo')
        ->with('nomeDoGato', $nomeGato)
        ->with('idadeDoGato', $idade)
        ->with('massaDoGato', $massa)
        ->with('donoDoGato', $dono);
    }
}
