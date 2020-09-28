     <?php

     use Doctrine\ORM\Mapping as ORM;
     use Doctrine\Common\Collections\ArrayCollection;

     /**
      * @ORM\Entity @ORM\table(name="operation")
      **/

     class Operation
     {
          /** @ORM\id @ORM\Column(type="integer") @ORM\GeneratedValue **/
          private $id;
          /** @ORM\Column(type="string") */
          private $numoperation;
          /** @ORM\Column(type="integer") */
          private $typeoperation;
          /** @ORM\Column(type="string") */
          private $operdate;
          /** @ORM\Column(type="string") */
          private $montantop;
          /** @ORM\Column(type="string") */
          private $state;
          /** @ORM\Column(type="string") */
          private $fromaccount;
          /** @ORM\Column(type="string") */
          private $toaccount;
          /** @ORM\Column(type="string") */
          private $agence;
          /**
           * One operation has many comptes. This is the inverse side.
           * @ORM\OneToMany(targetEntity="Compte", mappedBy="operation")
           */
          private $comptes;
          /**
           * Many operations have one affectation. This is the owning side.
           * @ORM\ManyToOne(targetEntity="Affectation", inversedBy="operations")
           * @ORM\JoinColumn(name="affectation_id", referencedColumnName="id")
           */
          private $affectation;

          public $employe;


          public function __construct()
          {
               $this->comptes = new ArrayCollection();
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
           * Get the value of numoperation
           */
          public function getNumoperation()
          {
               return $this->numoperation;
          }

          /**
           * Set the value of numoperation
           *
           * @return  self
           */
          public function setNumoperation($numoperation)
          {
               $this->numoperation = $numoperation;

               return $this;
          }

          /**
           * Get the value of typeoperation
           */
          public function getTypeoperation()
          {
               return $this->typeoperation;
          }

          /**
           * Set the value of typeoperation
           *
           * @return  self
           */
          public function setTypeoperation($typeoperation)
          {
               $this->typeoperation = $typeoperation;

               return $this;
          }

          /**
           * Get the value of operdate
           */
          public function getOperdate()
          {
               return $this->operdate;
          }

          /**
           * Set the value of operdate
           *
           * @return  self
           */
          public function setOperdate($operdate)
          {
               $this->operdate = $operdate;

               return $this;
          }

          /**
           * Get the value of montantop
           */
          public function getMontantop()
          {
               return $this->montantop;
          }

          /**
           * Set the value of montantop
           *
           * @return  self
           */
          public function setMontantop($montantop)
          {
               $this->montantop = $montantop;

               return $this;
          }

          /**
           * Get the value of state
           */
          public function getState()
          {
               return $this->state;
          }

          /**
           * Set the value of state
           *
           * @return  self
           */
          public function setState($state)
          {
               $this->state = $state;

               return $this;
          }

          /**
           * Get the value of fromaccount
           */
          public function getFromaccount()
          {
               return $this->fromaccount;
          }

          /**
           * Set the value of fromaccount
           *
           * @return  self
           */
          public function setFromaccount($fromaccount)
          {
               $this->fromaccount = $fromaccount;

               return $this;
          }

          /**
           * Get the value of toaccount
           */
          public function getToaccount()
          {
               return $this->toaccount;
          }

          /**
           * Set the value of toaccount
           *
           * @return  self
           */
          public function setToaccount($toaccount)
          {
               $this->toaccount = $toaccount;

               return $this;
          }

          /**
           * Get the value of agence
           */
          public function getAgence()
          {
               return $this->agence;
          }

          /**
           * Set the value of agence
           *
           * @return  self
           */
          public function setAgence($agence)
          {
               $this->agence = $agence;

               return $this;
          }

          /**
           * Get the value of comptes
           */
          public function getComptes()
          {
               return $this->comptes;
          }

          /**
           * Set the value of comptes
           *
           * @return  self
           */
          public function setComptes($comptes)
          {
               $this->comptes = $comptes;

               return $this;
          }

          /**
           * Get the value of affectation
           */
          public function getAffectation()
          {
               return $this->affectation;
          }

          /**
           * Set the value of affectation
           *
           * @return  self
           */
          public function setAffectation($affectation)
          {
               $this->affectation = $affectation;

               return $this;
          }
     }



















     ?>