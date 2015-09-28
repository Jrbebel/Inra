<?php 
   
namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaEosinophile
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AnaEosinophile
{
      /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;

 /**
     * @var integer
     * 
     * @ORM\Column(name="Eosinophile1", type="integer", nullable=true)
     */
    private $Eosinophile1; 
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="Eosinophile2", type="integer", nullable=true)
     */
    private $Eosinophile2; 
    
  /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    private $User;

  

    /**
     * Set Eosinophile1
     *
     * @param integer $eosinophile1
     * @return AnaEosinophile
     */
    public function setEosinophile1($eosinophile1)
    {
        $this->Eosinophile1 = $eosinophile1;
    
        return $this;
    }

    /**
     * Get Eosinophile1
     *
     * @return integer 
     */
    public function getEosinophile1()
    {
        return $this->Eosinophile1;
    }

    /**
     * Set Eosinophile2
     *
     * @param integer $eosinophile2
     * @return AnaEosinophile
     */
    public function setEosinophile2($eosinophile2)
    {
        $this->Eosinophile2 = $eosinophile2;
    
        return $this;
    }

    /**
     * Get Eosinophile2
     *
     * @return integer 
     */
    public function getEosinophile2()
    {
        return $this->Eosinophile2;
    }

    /**
     * Set CodeLabo
     *
     * @param \Inra2013\urzBundle\Entity\Analyse $codeLabo
     * @return AnaEosinophile
     */
    public function setCodeLabo(\Inra2013\urzBundle\Entity\Analyse $codeLabo)
    {
        $this->CodeLabo = $codeLabo;
    
        return $this;
    }

    /**
     * Get CodeLabo
     *
     * @return \Inra2013\urzBundle\Entity\Analyse 
     */
    public function getCodeLabo()
    {
        return $this->CodeLabo;
    }

    /**
     * Set User
     *
     * @param \Inra2013\urzBundle\Entity\User $user
     * @return AnaEosinophile
     */
    public function setUser(\Inra2013\urzBundle\Entity\User $user = null)
    {
        $this->User = $user;
    
        return $this;
    }

    /**
     * Get User
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
}