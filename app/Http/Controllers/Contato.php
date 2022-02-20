<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    public function contato() {
        var_dump($_GET);
        return view('site.contato');
    }
}
