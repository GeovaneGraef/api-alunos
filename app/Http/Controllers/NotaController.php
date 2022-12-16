<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helper\RetornoHelper;
use App\Services\NotaService;


class NotaController extends Controller
{
    private $serviceNota;
    private $retornoHelper;

    public function __construct(NotaService $serviceNota, RetornoHelper $retornoHelper)
    {
        $this->serviceNota = $serviceNota;
        $this->retornoHelper = $retornoHelper;
    }

    public function createGrades(Request $grades)
    {
        $validator = Validator::make($grades->all(), [
            'id_aluno' => 'required'
        ]);
        
        if ($validator->fails()) 
        {
           return $this->retornoHelper->error("Os campos não podem estar vazios e/ou inválidos", null);
        }

        return $this->serviceNota->createGrades($grades);
    }
}
