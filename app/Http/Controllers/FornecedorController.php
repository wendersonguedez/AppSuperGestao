<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = ['Fornecedor 1'];

        // Array multidimensional.
        $fornecedores2 = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',

            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores2'));
    }
}
