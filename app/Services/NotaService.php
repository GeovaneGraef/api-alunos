<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Helper\RetornoHelper;
use App\Repository\NotaRepository;

class NotaService extends Controller
{
    private $retornoHelper;
    private $notaRepoditory;

    public function __construct(RetornoHelper $retornoHelper, NotaRepository $notaRepoditory)
    {
        $this->retornoHelper = $retornoHelper;
        $this->notaRepoditory = $notaRepoditory;
    }

    public function createGrades($grades)
    {
        try
        {
            if($this->notaRepoditory->insertGrades($grades))
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
}

?>