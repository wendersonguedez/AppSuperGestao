<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal'); // Direcionando o usuário para a view 'principal', que está dentro da subpasta 'site'.
    }
}
