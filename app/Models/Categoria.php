<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria_livro';
    public $timestamps = false;
    protected $fillable = [
        'categoria','categoria_livro_cd_categ','reserva_num_reserva','emprestimo_num_emprestimo','editora_cod_editora','titulo_livro,qtde_livro'
    ];
}
