<?php

namespace App\Entity;
use DateTime;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Groups;
/**
 * DProtusersmobile
 *
 * @ORM\Table(name="D_PROTUSERSMOBILE")
 * @ORM\Entity(repositoryClass="App\Repository\DProtusersmobileRepository") 
 */
class DProtusersmobile  implements UserInterface
{
    /**
     * @var string
     * @Groups("user:Read")
     * @Assert\NotBlank
     * @Assert\Length(min=3) 
     * @Groups("app")
     * @ORM\Column(name="PROTM_User", type="string", length=50, nullable=false)
     */
    private $protmUser;

    /**
     *  @var string The hashed password
     * @Assert\NotBlank
     * @Groups("app")
     * @Assert\Length(min=3) 
     * @ORM\Column(name="PROTM_Pwd", type="string", length=500, nullable=false)
     */
    private $protmPwd;

    /**
     * @var string
     *
     * @ORM\Column(name="PROTM_Description", type="string", length=500, nullable=false)
     */
    private $protmDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="PROTM_Right", type="boolean", nullable=false)
     */
    private $protmRight;

    /**
     * @var string
     *
     * @ORM\Column(name="PROTM_EMail", type="string", length=50, nullable=false)
     */
    private $protmEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="PROTM_UserProfil", type="string", length=50, nullable=false)
     */
    private $protmUserprofil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PROTM_Administrator", type="smallint", nullable=true)
     */
    private $protmAdministrator;

    /**
     * @var string|null
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
     * @var string
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=false)
     */
    private $cbcreateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=false)
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROTM_Image", type="blob", nullable=true)
     */
    private $protmImage;


        /**
     * @var string
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=false)
     */
    private $emCode;
    /**
     * @see UserInterface
     */
    public function getProtmUser(): ?string
    {
        return $this->protmUser;
    }

    public function setProtmUser(string $protmUser): self
    {
        $this->protmUser = $protmUser;

        return $this;
    }
     /**
     * @see UserInterface
     */
    public function getProtmPwd(): ?string
    {
        return $this->protmPwd;
    }
    /**
     * @see UserInterface
     */
    public function setProtmPwd(string $protmPwd): self
    {
        $this->protmPwd = $protmPwd;

        return $this;
    }

    public function getProtmDescription(): ?string
    {
        return $this->protmDescription;
    }

    public function setProtmDescription(string $protmDescription): self
    {
        $this->protmDescription = $protmDescription;

        return $this;
    }

    public function getProtmRight(): ?bool
    {
        return $this->protmRight;
    }

    public function setProtmRight(bool $protmRight): self
    {
        $this->protmRight = $protmRight;

        return $this;
    }

    public function getProtmEmail(): ?string
    {
        return $this->protmEmail;
    }

    public function setProtmEmail(string $protmEmail): self
    {
        $this->protmEmail = $protmEmail;

        return $this;
    }

    public function getProtmUserprofil(): ?string
    {
        return $this->protmUserprofil;
    }

    public function setProtmUserprofil(string $protmUserprofil): self
    {
        $this->protmUserprofil = $protmUserprofil;

        return $this;
    }

    public function getProtmAdministrator(): ?int
    {
        return $this->protmAdministrator;
    }

    public function setProtmAdministrator(?int $protmAdministrator): self
    {
        $this->protmAdministrator = $protmAdministrator;

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

    public function setCbcreateur(string $cbcreateur): self
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(\DateTimeInterface $cbmodification): self
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getProtmImage()
    {
        return $this->protmImage;
    }

    public function setProtmImage($protmImage): self
    {
        $this->protmImage = $protmImage;

        return $this;
    }

    private $roles = [];
    
    public function getRoles(): array
    {
        $roles = $this->roles;
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
   public function setUsername(?string $protmUser):self{
       $this->protmUser = $protmUser;

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
       return $this->protmUser;
   }
   /**
    * @see UserInterface
    */
    public function getPassword():?string
    {
       return $this->protmPwd;
    }    


    public function setPassword(?string $protmPwd):self
    {
       $this->protmPwd = $protmPwd;

       return  $this; 
    }
    public function getEmCode(): ?string
    {
        return $this->emCode;
    }

    public function setEmCode(string $emCode): self
    {
        $this->emCode = $emCode;

        return $this;
    }

}
