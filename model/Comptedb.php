<?php

    namespace model;
    

    class Comptedb //Heritage
    {

        public function getAll($idCompte)
        {
            include 'accebase.php';
           // var_dump($entityManager);
           // die;
            $result = $entityManager
            ->createQuery("SELECT c FROM Compte c WHERE c.id = $idCompte")
            ->getOneOrNullResult();
            return $result;
 
        }
    }

    ?>