<?php
namespace service;


use model\Operationdb;

class OperationController //Heritage(extends)//
{
    /*public function add()
    {
        
     return $this->view->load("operation/add");
    }*/


    public function getAll()
    {   
        // required headers
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');
        $operation= new Operationdb(); 
        $operation=$operation->findAll();//array("COMPTE_AFFECTATION", "COMPTE_ADMIN");

        echo  json_encode($operation);
    }
}
