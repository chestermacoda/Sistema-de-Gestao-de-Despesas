<?php

namespace core\models;
use core\classes\Databases;

class despesas{


    public function Works(){
        $db = new Databases();

        $dados = $db->select("SELECT * FROM works ");
        return $dados;
    }
    public function Receber(){
        $db = new Databases();
        $dados = $db->select("SELECT * FROM receber r INNER join works w on w.id = r.works ");
        return $dados;
    }
    public function TotalReceber(){
        $db = new Databases();

        $dados = $db->select("SELECT SUM(Valor) AS Valor FROM receber");
        return $dados;
    }
    public function VerificarTrabalho($trabalho){
        $db = new Databases();
        $paramentros = [
            'trabalho' => $trabalho
        ];
        $dados = $db->select("SELECT work FROM works where work = :work",$paramentros);
        return $dados;
    }
    public function RegistarTrabalho($trabalho,$Modalidade,$descricao,$status){
        $db = new Databases();

        $paramentros = [
            ':trabalho' =>$trabalho,
            ':Modalidade' =>$Modalidade,
            ':descricao' =>$descricao,
            ':status' =>$status,
            ':user' => 1
        ];

        $db->insert("INSERT INTO works VALUES(0,:trabalho,:Modalidade,:descricao,:status,:user,NOW())",$paramentros);

    }
    public function RegistarContaReceber($trabalho,$valor,$data,$descricao,$status){
        $db = new Databases();

        $paramentros = [
            ':trabalho' =>$trabalho,
            ':valor' =>$valor,
            ':data' =>$data,
            ':descricao' =>$descricao,
            ':status' =>$status,
            ':user' => 1
        ];

        $db->insert("INSERT INTO receber VALUES(0,:trabalho,:valor,:data,:descricao,:status,:user,NOW())",$paramentros);
    }
}

?>