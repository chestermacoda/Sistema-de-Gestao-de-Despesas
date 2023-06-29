<?php
namespace core\controllers;

use core\classes\Store;

class Main{

    public function index(){
        Store::Layout([
            'login/layout/header_html',
            'login/index',
            'login/layout/footer'
        ]);
    }
    public function Filmes(){
        Store::Layout([
            'Main/layout/header_html',
            'Main/layout/header',
            'Main/Filmes',
            'Main/layout/footer'
        ]);
    }
    // Detalhe do Filme 
    public function Filme($id){
        // $id = "Alma Gemea";
        if(empty($id)){
            Store::redirect('');
        }
        $dados = [
            'id' =>$id
        ];
        Store::Layout([
            'Main/layout/header_html',
            'Main/layout/header',
            'Main/Filme',
            'Main/layout/footer'
        ],$dados);
    }


}

?>