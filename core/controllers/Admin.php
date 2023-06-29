<?php
namespace core\controllers;
use core\classes\Store;
use core\models\despesas;
 

class Admin{

    public function index(){
        $action = new despesas();
        $works = $action->Works();
        $dados = [
            'trabalhos' => $works
        ];
        Store::Layout([
            'Admin/layout/header_html',
            'Admin/layout/header',
            'Admin/index',
            'Admin/layout/footer',
        ],$dados);
    }
    public function Pagar(){
        Store::Layout([
            'Admin/layout/header_html',
            'Admin/layout/header',
            'Admin/Pagar',
            'Admin/layout/footer',
        ]);
    }
    public function Receber(){
        $action = new despesas();
        $receber = $action->Receber();
        $trabalho = $action->Works();
        $TotalReceber = $action->TotalReceber();
        $dados = [
            'receber' => $receber,
            'trabalhos' => $trabalho,
            'total' => $TotalReceber[0]
        ];
        Store::Layout([
            'Admin/layout/header_html',
            'Admin/layout/header',
            'Admin/Receber',
            'Admin/Modal/ModalTrabalho',
            'Admin/Modal/ModalReceber',
            'Admin/layout/footer',
        ],$dados);
    }
    public function Work(){
        $action = new despesas();
        $works = $action->Works();
        $dados = [
            'trabalhos' => $works
        ];
        Store::Layout([
            'Admin/layout/header_html',
            'Admin/layout/header',
            'Admin/Work',
            'Admin/Modal/ModalTrabalho',
            'Admin/layout/footer',
        ],$dados);
    }
    public function Setting(){
        Store::Layout([
            'Admin/layout/header_html',
            'Admin/layout/header',
            'Admin/Setting',
            'Admin/layout/footer',
        ]);
    }
    
}

?>