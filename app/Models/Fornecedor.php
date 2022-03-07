<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    /* definindo o nome da tabela que os dados serão enviados. o atributo $table vai sobrepor o nome que foi definida automaticamente pelo Eloquent */
    protected $table = 'fornecedores';

    /* indicando quais campos podem ser atribuidos em massa, que seria a passagem de vários valores de uma vez só para a inserção no banco ao executa o metodo create. */
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    use HasFactory;
}
