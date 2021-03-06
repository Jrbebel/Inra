<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Acme/UserBundle/Entity/User.php

namespace Inra2013\urzBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @ORM\Column(type="text")
     */
    protected $Nom;

    
     /**
     * @ORM\Column(type="text")
     */
    protected $Prenom;
    
    
     /**
     * @ORM\Column(type="integer")
     */
    protected $Telephone;
    
         /**
     * @ORM\Column(type="text")
     */
    protected $Fonction;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
    
        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set Prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;
    
        return $this;
    }

    /**
     * Get Prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set Telephone
     *
     * @param integer $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->Telephone = $telephone;
    
        return $this;
    }

    /**
     * Get Telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * Set Fonction
     *
     * @param string $fonction
     * @return User
     */
    public function setFonction($fonction)
    {
        $this->Fonction = $fonction;
    
        return $this;
    }

    /**
     * Get Fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->Fonction;
    }
}