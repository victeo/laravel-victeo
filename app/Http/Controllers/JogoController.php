<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogoController extends Controller
{
    public function teste(){

        echo "teste";
    }

    public function listarJogos(){
        $jogos = [
            'Skyrim',
            'Terrária',
            'Wow'
        ];
        $hmtl = "<ul>";

        foreach ($jogos as $jogo){
            $hmtl .="<li>$jogo</li>";

        }
        $hmtl .="</ul>";

        return $hmtl;
    }
}
