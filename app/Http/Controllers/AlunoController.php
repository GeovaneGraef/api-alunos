<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helper\RetornoHelper;
use App\Services\AlunoService;


class AlunoController extends Controller
{
    private $serviceAluno;
    private $retornoHelper;

    public function __construct(AlunoService $serviceAluno, RetornoHelper $retornoHelper)
    {
        $this->serviceAluno = $serviceAluno;
        $this->retornoHelper = $retornoHelper;
    }

    public function createStudent(Request $student)
    {
        $validator = Validator::make($student->all(), [
            'nome' => 'required',
            'email' => 'required|email'
        ]);
        
        if ($validator->fails()) 
        {
           return $this->retornoHelper->error("Os campos não podem estar vazios e/ou inválidos", null);
        }

        return $this->serviceAluno->createStudent($student);
    }

    public function showStudent(Request $student)
    {
        return $this->serviceAluno->showStudent($student);
    }

    public function updateStudent($id_aluno, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) 
        {
           return $this->retornoHelper->error("Os campos não podem estar vazios e/ou inválidos", null);
        }

        return $this->serviceAluno->updateStudent($id_aluno, $request);
    }

    public function deleteStudent($id_aluno)
    {
        return $this->serviceAluno->deleteStudent($id_aluno);
    }
}
