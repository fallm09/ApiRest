<?php

    namespace model;
    

    class Comptedb //Heritage
    {

        public function findAll()
        {
            include 'accebase.php';
           // var_dump($entityManager);
           // die;
            $result = $entityManager
            ->createQuery("SELECT c FROM Compte c")
            ->getArrayResult();
            return $result;
            //return array->db->createQuery();
            //("COMPTE_EMPLOYER", "COMPTE_OPERATION");
            //var_dump($this->db);
            //die;
 
        }
    }

    ?>