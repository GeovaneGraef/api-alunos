<?php

namespace App\Repository;

use App\Models\Nota;

class NotaRepository 
{
    public function insertGrades($grades)
    {
        $gradesStudent = new Nota;
 
        $gradesStudent->id_aluno = $grades['id_aluno'];
        $gradesStudent->nota_um = $grades['nota_um'];
        $gradesStudent->nota_dois = $grades['nota_dois'];
        $gradesStudent->nota_tres = $grades['nota_tres'];
        $gradesStudent->media_final = $grades['media_final'];
        
        if($gradesStudent->save())
        {
            return true;
        }

        return false;
    }
}

?>