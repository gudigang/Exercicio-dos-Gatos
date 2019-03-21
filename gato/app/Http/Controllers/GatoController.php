<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatoController extends Controller
{
                        
     public function perfilGato(){
        $nomeGato="Tirulipa";
        $idade = 12;
        $massa = 7;
        $dono = "Antonio";
        return view('tirulipa')
        ->with('nomeDoGato', $nomeGato)
        ->with('idadeDoGato', $idade)
        ->with('massaDoGato', $massa)
        ->with('donoDoGato', $dono);
    }

}
                        
?>
