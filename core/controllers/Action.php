<?php


namespace core\controllers;

use core\models\despesas;

class Action{

    public function RegistarRecebimento(){
        $saida = "";
        $despesas = new despesas();
        $trabalho = filter_input(INPUT_POST,'trabalho');
        $valor = filter_input(INPUT_POST,'valor');
        $data = filter_input(INPUT_POST,'data');
        $descricao = filter_input(INPUT_POST,'descricao');
        $status = filter_input(INPUT_POST,'status');

        if(empty($trabalho)){
            $saida = "Preencha o campo Nome";
        }else if(empty($valor)){
            $saida = "Preencha o campo valor";
        }else if(empty($data)){
            $saida = "Preencha o campo data";
        }else if(empty($descricao)){
            $saida = "Preencha o campo descricao";
        }else if(empty($status)){
            $saida = "Escolha o status";
        }else{
            $despesas->RegistarContaReceber($trabalho,$valor,$data,$descricao,$status);
            $saida = 'Registado com sucesso';
        }
        echo json_encode($saida);

    } 
    public function RegistarTrabalho(){
        $saida = '';
        $despesas = new despesas();
        $trabalho = filter_input(INPUT_POST,'trabalho');
        $Modalidade = filter_input(INPUT_POST,'modalidade');
        $descricao = filter_input(INPUT_POST,'descricao');
        $status = filter_input(INPUT_POST,'status');

        $dados = $despesas->VerificarTrabalho($trabalho);

        if(empty($trabalho)){
            $saida = "Preencha o campo Trabalho";
        }else if(empty($Modalidade)){
            $saida = "Escolha a Modalidade";
        }else if(empty($descricao)){
            $saida = "Preencha o campo descricao";
        }else if(empty($status)){
            $saida = "Escolha o campo status";
        }else if(count($dados) > 0){
            $saida = "Trabalho Ja existe";
        }else{
           
            $despesas->RegistarTrabalho($trabalho,$Modalidade,$descricao,$status);
            $saida = 'Registado com sucesso';
        }

        echo json_encode($saida);
    }
}

?>