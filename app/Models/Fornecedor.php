<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    /* definindo o nome da tabela que os dados serão enviados. o atributo $table vai sobrepor o nome que foi definida automaticamente pelo Eloquent */
    protected $table = 'fornecedores';

    use HasFactory;
}
