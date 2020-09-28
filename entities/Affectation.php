    <?php
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

/**
     * @ORM\entity @ORM\table(name="affectation")
     **/
    class Affectation
    {
        /** @ORM\id @ORM\Column(type="integer") @ORM\GeneratedValue **/
        private $id;
        /** @ORM\Column(type="string") */
        private $employee;
        /** @ORM\Column(type="integer") */
        private $agency;
        /** @ORM\Column(type="integer") */
        private $dateaffect;
        /** @ORM\Column(type="string") */
        private $description;

        /**
         * Many affectation have Many employer.
         * @ORM\ManyToMany(targetEntity="Employer", inversedBy="affectations")
         * @ORM\JoinTable(name="affectations_employer")
         */
        private $employer;
        /**
         * One affectation has many operations. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Operation", mappedBy="affectation")
            */
        private $operations;
        


        public function __construct()
        {
            $this->operations = new ArrayCollection(); 
            $this->employer = new ArrayCollection();  
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
            $this->description = $description;

            return $this;
        }

        /**
         * Get the value of dateaffect
         */ 
        public function getDateaffect()
        {
            return $this->dateaffect;
        }

        /**
         * Set the value of dateaffect
         *
         * @return  self
         */ 
        public function setDateaffect($dateaffect)
        {
            $this->dateaffect = $dateaffect;

            return $this;
        }

        /**
         * Get the value of agency
         */ 
        public function getAgency()
        {
            return $this->agency;
        }

        /**
         * Set the value of agency
         *
         * @return  self
         */ 
        public function setAgency($agency)
        {
            $this->agency = $agency;

            return $this;
        }

        /**
         * Get the value of employee
         */ 
        public function getEmployee()
        {
            return $this->employee;
        }

        /**
         * Set the value of employe
         *
         * @return  self
         */ 
        public function setEmployee($employee)
        {
            $this->employee = $employee;

            return $this;
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
         * Get the value of employer
         */ 
        public function getEmployer()
        {
            return $this->employer;
        }

        /**
         * Set the value of employer
         *
         * @return  self
         */ 
        public function setEmployer($employer)
        {
            $this->employer = $employer;

            return $this;
        }

        /**
         * Get the value of operations
         */ 
        public function getOperations()
        {
            return $this->operations;
        }

        /**
         * Set the value of operations
         *
         * @return  self
         */ 
        public function setOperations($operations)
        {
            $this->operations = $operations;

            return $this;
        }
    }
    ?>