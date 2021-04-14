<?php

namespace App\Entity;

use DateTime;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Null_; 
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\Annotation;
use Symfony\Component\Security\Core\User\UserProviderInterface;






/**
 * DProtusers
 *      
 * @ORM\Table(name="D_PROTUSERS", uniqueConstraints={@ORM\UniqueConstraint(name="UK_PROT_User", columns={"PROT_User"})})
 * @ORM\Entity(repositoryClass="App\Repository\DProtusersRepository") 
 */
class DProtusers implements UserInterface
{
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true)
     */
    private $emCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRO_Code", type="string", length=50, nullable=true)
     */
    private $proCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GR_Code", type="string", length=50, nullable=true)
     */
    private $grCode;

    /**
     * @var string
     * @Groups("user:Read")
     * @Assert\NotBlank
     * @Assert\Length(min=3) 
     * @Groups("app")
     * @ORM\Column(name="PROT_User", type="string", length=50, nullable=false)
     */
    private $protUser;

    /**
     * @var string The hashed password
     * @Groups("user:Read")
     * @Assert\NotBlank
     * @Groups("app")
     * @Assert\Length(min=3) 
     * @ORM\Column(name="PROT_Pwd", type="string", length=500, nullable=true)
     */
    private $protPwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROT_Description", type="string", length=500, nullable=true)
     */
    private $protDescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PROT_Right", type="smallint", nullable=true)
     */
    private $protRight;

    /**
     * @var string|null
     * @Groups({"read"})
     * @ORM\Column(name="PROT_EMail", type="string", length=50, nullable=true)
     */
    private $protEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROT_UserProfil", type="string", length=50, nullable=true)
     */
    private $protUserprofil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PROT_Administrator", type="smallint", nullable=true)
     */
    private $protAdministrator;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PROT_Echap", type="smallint", nullable=true)
     */
    private $protEchap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true)
     */
    private $deCode;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMarq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true)
     */
    private $cbcreateur;

    /**
     * @var DateTime 
     * @ORM\Column(name="cbModification", type="datetime", nullable=true)
     * 
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    public function getEmCode(): ?string
    {
        return $this->emCode;
    }

    public function setEmCode(?string $emCode): self
    {
        $this->emCode = $emCode;

        return $this;
    }

    public function getProCode(): ?string
    {
        return $this->proCode;
    }

    public function setProCode(?string $proCode): self
    {
        $this->proCode = $proCode;

        return $this;
    }

    public function getGrCode(): ?string
    {
        return $this->grCode;
    }

    public function setGrCode(?string $grCode): self
    {
        $this->grCode = $grCode;

        return $this;
    }
   /**
     * @see UserInterface
     */
    public function getProtUser(): ?string
    {
        return $this->protUser;
    }

    public function setProtUser(string $protUser): self
    {
        $this->protUser = $protUser;

        return $this;
    }
             /**
     * @see UserInterface
     */
    public function getProtPwd(): ?string
    {
        return $this->protPwd;
    }

    public function setProtPwd(?string $protPwd): self
    {
        $this->protPwd = $protPwd;

        return $this;
    }

    public function getProtDescription(): ?string
    {
        return $this->protDescription;
    }

    public function setProtDescription(?string $protDescription): self
    {
        $this->protDescription = $protDescription;

        return $this;
    }

    public function getProtRight(): ?int
    {
        return $this->protRight;
    }

    public function setProtRight(?int $protRight): self
    {
        $this->protRight = $protRight;

        return $this;
    }

    public function getProtEmail(): ?string
    {
        return $this->protEmail;
    }

    public function setProtEmail(?string $protEmail): self
    {
        $this->protEmail = $protEmail;

        return $this;
    }

    public function getProtUserprofil(): ?string
    {
        return $this->protUserprofil;
    }

    public function setProtUserprofil(?string $protUserprofil): self
    {
        $this->protUserprofil = $protUserprofil;

        return $this;
    }

    public function getProtAdministrator(): ?int
    {
        return $this->protAdministrator;
    }

    public function setProtAdministrator(?int $protAdministrator): self
    {
        $this->protAdministrator = $protAdministrator;

        return $this;
    }

    public function getProtEchap(): ?int
    {
        return $this->protEchap;
    }

    public function setProtEchap(?int $protEchap): self
    {
        $this->protEchap = $protEchap;

        return $this;
    }

    public function getDeCode(): ?string
    {
        return $this->deCode;
    }

    public function setDeCode(?string $deCode): self
    {
        $this->deCode = $deCode;

        return $this;
    }

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): self
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification():?\DateTime
    {
        return $this->cbmodification;
    }
       
     /**
     * Set setCbmodification
     *
     * @param \DateTime $cbmodification
     * @ORM\PrePersist
     * @return Example
     */
    
    public function setCbmodification()
    {    
        if(!$this->cbmodification){
            $this->cbmodification = new \DateTime();
           
        
    }
    return $this;
}
     
    /**
     * @see UserInterface
     */
    
     public function getRoles()
     {
        $roles = $this->protUserprofil;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
      }
     /**
     * @see UserInterface
     */
     public function getSalt()
     {
         return null;
     }
     /**
     * @see UserInterface
     */   
    public function eraseCredentials()
    {
    }
    public function setUsername(?string $protUser):self{
        $this->protUser = $protUser;

        return $this;

    }
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     * @param string
     */
    public function getUsername():?string
    {
        return $this->protUser;
    }
    /**
     * @see UserInterface
     */
     public function getPassword():?string
     {
        return $this->protPwd;
     }    


     public function setPassword(?string $protPwd):self
     {
        $this->protPwd = $protPwd;

        return $this;
     }
}
