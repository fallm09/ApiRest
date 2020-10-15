<?php

    namespace model;


    class Operationdb //Heritage
    {

        public function findAll()
        {
            include 'accebase.php';
            $result = $entityManager
            ->createQuery("SELECT c FROM Operation c")
            ->getArrayResult();
            return $result;
            
 
        }
    }

    ?>