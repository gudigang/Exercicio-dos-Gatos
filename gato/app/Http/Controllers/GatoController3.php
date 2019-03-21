<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatoController3 extends Controller
{
    public function perfilGato(){
        $nomeGato="Gerome";
        $idade = 9;
        $massa = 7;
        $dono = "Antonio";
        return view('gerome')
        ->with('nomeDoGato', $nomeGato)
        ->with('idadeDoGato', $idade)
        ->with('massaDoGato', $massa)
        ->with('donoDoGato', $dono);
    }
}
