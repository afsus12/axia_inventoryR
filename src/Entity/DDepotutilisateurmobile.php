<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * DDepotutilisateurmobile
 *
 * @ORM\Table(name="D_DEPOTUTILISATEURMOBILE")
 * @ORM\Entity(repositoryClass="App\Repository\DDepotutilisateurmobileRepository") 
 */
class DDepotutilisateurmobile
{
    /**
     * @var string
     *
     * @ORM\Column(name="PROTM_User", type="string", length=50, nullable=false)
     */
    private $protmUser;

    /**
     * @var string
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=false)
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true)
     */
    private $cbmodification;

    public function getProtmUser(): ?string
    {
        return $this->protmUser;
    }

    public function setProtmUser(string $protmUser): self
    {
        $this->protmUser = $protmUser;

        return $this;
    }

    public function getDeCode(): ?string
    {
        return $this->deCode;
    }

    public function setDeCode(string $deCode): self
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

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): self
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }


}
