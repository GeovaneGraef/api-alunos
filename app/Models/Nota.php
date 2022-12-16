<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'id_aluno', 'nota_um', 'nota_dois', 'nota_tres', 'media_final'
    ];

    protected $table = 'aluno_nota';

    protected $primaryKey = 'id_aluno_nota';

    public $timestamps = false;
}
