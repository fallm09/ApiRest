<?php
namespace service;

use model\Comptedb;

class CompteController //Heritage(extends)//
{
    
    public function getAll($id)
    {   
        // required headers
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');
        $compte= new Comptedb(); 
        $compte = $compte->getAll($id);

        $tab = [];
        $tab[] = ['id'=>$compte->getId()];
        $tab[] = ['numero'=>$compte->getAccountnumber()];
        $tab[] = ['solde'=>$compte->getsolde()];
        $t = [];
        foreach ($compte->getOperation() as $operation ) {
            $a = ['montant'=>$operation->getMontantop()];
            $a = ['Type Operation'=>$operation->getTypeoperation()];
            $t [] = $a;
        }

        $tab[] = ['operation'=>$t];

        echo  json_encode($tab);
        
    }

     public function getSolde($id){
        $compte= new Comptedb();
        $compte = $compte->getAll($id);
      
        $tab[]= ['solde'=>$compte->getsolde()];
        echo  json_encode($tab);

    }


}
 