<?php

namespace App\Validator;

use App\Models\Empregador;
use App\Models\VagaEmprego;

class VagaEmpregoValidator{
    public static function validate($data){
        $validator = \Validator::make($data, \App\Models\VagaEmprego::$rules,\App\Models\VagaEmprego::$messages);
        if($data['quantidade_de_vagas'] < 0){
            $validator->errors()->add('quantidade_invalida','Quantidade de vagas negativa');
        }
        if(!$validator->errors()->isEmpty())
            throw new ValidationException($validator, "Erro na validação da Vaga de Emprego");
        return $validator;
    }
}

?>