<?php

namespace App\Helper;

use stdClass;

class RetornoHelper
{
    public function success($message, $returnData)
    {
        $dados = new stdClass();

        $dados->success = true;
        $dados->message = $message;
        $dados->data = $returnData;

        return response()->json($dados, 200);
    }

    public function error($message, $returnData)
    {
        $dados = new stdClass();

        $dados->success = false;
        $dados->message = $message;
        $dados->data = $returnData;

        return response()->json($dados, 400);
    }
}

?>