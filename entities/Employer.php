  <?php
  use Doctrine\ORM\Mapping as ORM;
  use Doctrine\Common\Collections\ArrayCollection;

  /**
   * @ORM\entity @ORM\table(name="employer")
   **/
  class Employer
  {
      /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** 
      * @ORM\Column(type="string") 
      */
    private $numEmploye;
    /** @ORM\Column(type="string") */
    private $telephone;
    /** @ORM\Column(type="string") */
    private $email;
    /** @ORM\Column(type="string") */
    private $cni;
    /** @ORM\Column(type="string") */
    private $adresse;
    /** @ORM\Column(type="string") */
    private $service;
    /** @ORM\Column(type="string") */
    private $agency;
    /** @ORM\Column(type="integer") */
    private $dateNaiss; 
      /**
       * Many employer have Many affectations.
       * @ORM\ManyToMany(targetEntity="Affectation", mappedBy="employer")
       */
    private $affectations;
    
    public function __construct()
    {
      $this->affectations = new ArrayCollection();   
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
     * Get the value of numEmploye
     */ 
    public function getNumEmploye()
    {
      return $this->numEmploye;
    }

    /**
     * Set the value of numEmploye
     *
     * @return  self
     */ 
    public function setNumEmploye($numEmploye)
    {
      $this->numEmploye = $numEmploye;

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
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
      return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;

      return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
      $this->email = $email;

      return $this;
    }

    /**
     * Get the value of cni
     */ 
    public function getCni()
    {
      return $this->cni;
    }

    /**
     * Set the value of cni
     *
     * @return  self
     */ 
    public function setCni($cni)
    {
      $this->cni = $cni;

      return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
      return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
      $this->adresse = $adresse;

      return $this;
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
      return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
      $this->service = $service;

      return $this;
    }

    /**
     * Get the value of dateNaiss
     */ 
    public function getDateNaiss()
    {
      return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @return  self
     */ 
    public function setDateNaiss($dateNaiss)
    {
      $this->dateNaiss = $dateNaiss;

      return $this;
    }

    /**
     * Get the value of affectations
     */ 
    public function getAffectations()
    {
      return $this->affectations;
    }

    /**
     * Set the value of affectations
     *
     * @return  self
     */ 
    public function setAffectations($affectations)
    {
      $this->affectations = $affectations;

      return $this;
    }
  }
