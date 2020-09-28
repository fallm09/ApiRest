<?php
namespace service;

use model\Comptedb;

class CompteController //Heritage(extends)//
{
    public function add()
    {
        
     return $this->view->load("compte/add");
    }
    
    public function getAll()
    {   
        // required headers
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');
        $compte= new Comptedb(); 
        $compte = $compte->findAll();//array("COMPTE_AFFECTATION", "COMPTE_ADMIN");

        echo  json_encode($compte);
    }
}
 