<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassicController extends Controller
{
    function index(string $dificuldade)
    {
        return view("classic/index", [
            "dificuldade" => $dificuldade
        ]);
    }

    // ?? = Validação

    function image(Request $request){
        $dificuldade = $request->dificulade;
        $tentativas = $request->attempts ?? 0;

        $caminho = storage_path("app/public/rin.png");

        if (!file_exists($caminho)){
            abort(404, "Imagem não encontrada");
        }
    }
}
