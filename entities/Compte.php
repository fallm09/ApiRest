 <?php

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;


    /**
     * @ORM\entity @ORM\table(name="compte")
     **/

    class Compte
    {
        /** @ORM\id @ORM\Column(type="integer") @ORM\GeneratedValue **/
        private $id;
        /** @ORM\Column(type="string") */
        private $accountnumber;
        /** @ORM\Column(type="string") */
        private $clerib;
        /** @ORM\Column(type="integer") */
        private $typecompte;
        /** @ORM\Column(type="integer") */ 
        private $solde;
        /** @ORM\Column(type="string") */
        private $datecreation;
       /**
         * One product has many features. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Operation", mappedBy="compte")
         */
        private $operation;
    

        public function __construct()
        {
            $this->operation = new ArrayCollection();
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
            $this->id = $id;

            return $this;
        }

        /**
         * Get the value of clerib
         */ 
        public function getClerib()
        {
            return $this->clerib;
        }

        /**
         * Set the value of clerib
         *
         * @return  self
         */ 
        public function setClerib($clerib)
        {
            $this->clerib = $clerib;

            return $this;
        }

        /**
         * Get the value of accountnumber
         */ 
        public function getAccountnumber()
        {
            return $this->accountnumber;
        }

        /**
         * Set the value of accountnumber
         *
         * @return  self
         */ 
        public function setAccountnumber($accountnumber)
        {
            $this->accountnumber = $accountnumber;

            return $this;
        }

        /**
         * Get the value of typecompte
         */ 
        public function getTypecompte()
        {
            return $this->typecompte;
        }

        /**
         * Set the value of typecompte
         *
         * @return  self
         */ 
        public function setTypecompte($typecompte)
        {
            $this->typecompte = $typecompte;

            return $this;
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
            return $this->solde;
        }

        /**
         * Set the value of solde
         *
         * @return  self
         */ 
        public function setSolde($solde)
        {
            $this->solde = $solde;

            return $this;
        }


        /**
         * Get the value of datecreation
         */ 
        public function getDatecreation()
        {
            return $this->datecreation;
        }

        /**
         * Set the value of datecreation
         *
         * @return  self
         */ 
        public function setDatecreation($datecreation)
        {
            $this->datecreation = $datecreation;

            return $this;
        }


        /**
         * Get the value of operation
        */ 
        public function getOperation()
        {
            return $this->operation;
        }

        /**
         * Set the value of operation
        *
        * @return  self
        */ 
        public function setOperation($operation)
        {
            $this->operation = $operation;

            return $this;
        }
    }






















    ?>