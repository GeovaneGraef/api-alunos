<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Helper\RetornoHelper;
use App\Repository\AlunoRepository;

class AlunoService extends Controller
{
    private $retornoHelper;
    private $alunoRepoditory;

    public function __construct(RetornoHelper $retornoHelper, AlunoRepository $alunoRepoditory)
    {
        $this->retornoHelper = $retornoHelper;
        $this->alunoRepoditory = $alunoRepoditory;
    }

    public function createStudent($student)
    {
        try
        {
            //Verifica se já não tem aluno cadastrado com (valido pelo nome, mas pode validar pelo CPF por exemplo)
            $studentSearch =  $this->alunoRepoditory->searchStudent($student['nome']);
            if($studentSearch->count() >= 1)
            {
                return $this->retornoHelper->error("Este aluno já existe na base", null);
            }

            //Caso não exista, faz aquele insert gostoso na base
            if($this->alunoRepoditory->insertStudent($student))
            {
                return $this->retornoHelper->success("Cadastro realizado com sucesso", null);
            } else {
                return $this->retornoHelper->error("Erro ao efetuar o cadastro", null);
            }
        } catch(Exception $e)
        {
            return $this->retornoHelper->error($e->getMessage(), null);
        }
    }

    public function showStudent($student)
    {
        try
        {
            $studentSearch =  $this->alunoRepoditory->searchStudent($student['nome']);
            if($studentSearch->count() >= 1)
            {
                return $this->retornoHelper->success(null, $studentSearch);
            } else {
                return $this->retornoHelper->error("Aluno não encontrado na base", null);
            }

        } catch(Exception $e)
        {
            return $this->retornoHelper->error($e->getMessage(), null);
        }
    }

    public function updateStudent($id, $request)
    {
        try
        {
            if($this->alunoRepoditory->updateStudent($id, $request))
            {
                return $this->retornoHelper->success("Cadastro atualizado com sucesso", null);
            } else {
                return $this->retornoHelper->error("Erro ao atualizar o cadastro", null);
            }
        } catch(Exception $e)
        {
            return $this->retornoHelper->error($e->getMessage(), null);
        }
    }

    public function deleteStudent($id)
    {
        try
        {
            if($this->alunoRepoditory->deleteStudent($id))
            {
                return $this->retornoHelper->success("Registro excluído com sucesso", null);
            } else {
                return $this->retornoHelper->error("Erro ao excluir o registro", null);
            }
        } catch(Exception $e)
        {
            return $this->retornoHelper->error($e->getMessage(), null);
        }
    }
}

?>