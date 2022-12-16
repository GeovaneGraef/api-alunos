<?php

namespace App\Repository;

use App\Models\Aluno;

class AlunoRepository 
{
    public function searchStudent($name)
    {
        $studentSearch = Aluno::where('nome', '=', $name)->get();
        return $studentSearch;
    }

    public function insertStudent($student)
    {
        $aluno = new Aluno;
 
        $aluno->nome = $student['nome'];
        $aluno->email = $student['email'];
        if($aluno->save())
        {
            return true;
        }

        return false;
    }

    public function updateStudent($id_aluno, $request)
    {
        $student = Aluno::find($id_aluno);
        if($student != null)
        {
            $student->update($request->all());
            return true;
        }

        return false;
    }

    public function deleteStudent($id_aluno)
    {
        $student = Aluno::find($id_aluno);
        if($student != null)
        {
            $student->delete($id_aluno);
            return true;
        }
        
        return false;
    }
}

?>