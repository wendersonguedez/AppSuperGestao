<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    // Recebendo os parâmetros que foram enviados na rota '/teste'.
    public function teste($p1, $p2) {
        // echo "A soma de $p1 + $p2 é: " . ($p1 + $p2);

        /* Enviando parâmetros do controller para a view utilizando array associativo.
        return view('site.teste', ['p1' => $p1, 'p2' => $p2]);


        Utilizando método compact.
        return view('site.teste', compact('p1', 'p2'));
        */

        // Utilizando método with(). 'x' recebe o valor de $p1.
        return view('site.teste')->with('x', $p1)->with('y', $p2);

    }
}
