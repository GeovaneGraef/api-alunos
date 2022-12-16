<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome', 'email',
    ];

    protected $table = 'aluno';

    protected $primaryKey = 'id_aluno';

    public $timestamps = false;
}
