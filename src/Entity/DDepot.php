<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\DArtstock;
use JMS\Serializer\Annotation\Groups;


/**
 * DDepot
 *
 * @ORM\Table(name="D_DEPOT", uniqueConstraints={@ORM\UniqueConstraint(name="UK_INTITULE", columns={"DE_Intitule"}), @ORM\UniqueConstraint(name="UK_Code", columns={"DE_Code"})})
 * @ORM\Entity(repositoryClass="App\Repository\DDepotRepository")
 */
class DDepot
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_CodeP", type="string", length=50, nullable=true)
     */
    private $deCodep;

    /**
     * @var string
     * @ORM\Column(name="[DE_Code]", type="string", length=50, nullable=false)
     */
    private $deCode;

    /**
     * @var string
     * 
     * @ORM\Column(name="[DE_Intitule]", type="string", length=50, nullable=false)
     * @Groups({"inti"}) 
     */
    private $deIntitule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Adresse", type="string", length=50, nullable=true)
     */
    private $deAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Complement", type="string", length=500, nullable=true)
     */
    private $deComplement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_CodePostal", type="string", length=50, nullable=true)
     */
    private $deCodepostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Ville", type="string", length=50, nullable=true)
     */
    private $deVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Contact", type="string", length=50, nullable=true)
     */
    private $deContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Region", type="string", length=50, nullable=true)
     */
    private $deRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Pays", type="string", length=50, nullable=true)
     */
    private $dePays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_EMail", type="string", length=50, nullable=true)
     */
    private $deEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Telephone", type="string", length=50, nullable=true)
     */
    private $deTelephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Telecopie", type="string", length=50, nullable=true)
     */
    private $deTelecopie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DE_CatCompta", type="smallint", nullable=true)
     */
    private $deCatcompta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DE_Emplacement", type="smallint", nullable=true)
     */
    private $deEmplacement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DE_Suivi", type="smallint", nullable=true)
     */
    private $deSuivi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DE_Type", type="smallint", nullable=true)
     */
    private $deType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DE_DC", type="smallint", nullable=true)
     */
    private $deDc;

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
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true, options={"default"="CSQL"})
     */
    private $cbcreateur = 'CSQL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UG_Code", type="string", length=50, nullable=true)
     */
    private $ugCode;

  

    

    public function getDeCodep(): ?string
    {
        return $this->deCodep;
    }

    public function setDeCodep(?string $deCodep): self
    {
        $this->deCodep = $deCodep;

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

    public function getDeIntitule(): ?string
    {
        return $this->deIntitule;
    }

    public function setDeIntitule(string $deIntitule): self
    {
        $this->deIntitule = $deIntitule;

        return $this;
    }

    public function getDeAdresse(): ?string
    {
        return $this->deAdresse;
    }

    public function setDeAdresse(?string $deAdresse): self
    {
        $this->deAdresse = $deAdresse;

        return $this;
    }

    public function getDeComplement(): ?string
    {
        return $this->deComplement;
    }

    public function setDeComplement(?string $deComplement): self
    {
        $this->deComplement = $deComplement;

        return $this;
    }

    public function getDeCodepostal(): ?string
    {
        return $this->deCodepostal;
    }

    public function setDeCodepostal(?string $deCodepostal): self
    {
        $this->deCodepostal = $deCodepostal;

        return $this;
    }

    public function getDeVille(): ?string
    {
        return $this->deVille;
    }

    public function setDeVille(?string $deVille): self
    {
        $this->deVille = $deVille;

        return $this;
    }

    public function getDeContact(): ?string
    {
        return $this->deContact;
    }

    public function setDeContact(?string $deContact): self
    {
        $this->deContact = $deContact;

        return $this;
    }

    public function getDeRegion(): ?string
    {
        return $this->deRegion;
    }

    public function setDeRegion(?string $deRegion): self
    {
        $this->deRegion = $deRegion;

        return $this;
    }

    public function getDePays(): ?string
    {
        return $this->dePays;
    }

    public function setDePays(?string $dePays): self
    {
        $this->dePays = $dePays;

        return $this;
    }

    public function getDeEmail(): ?string
    {
        return $this->deEmail;
    }

    public function setDeEmail(?string $deEmail): self
    {
        $this->deEmail = $deEmail;

        return $this;
    }

    public function getDeTelephone(): ?string
    {
        return $this->deTelephone;
    }

    public function setDeTelephone(?string $deTelephone): self
    {
        $this->deTelephone = $deTelephone;

        return $this;
    }

    public function getDeTelecopie(): ?string
    {
        return $this->deTelecopie;
    }

    public function setDeTelecopie(?string $deTelecopie): self
    {
        $this->deTelecopie = $deTelecopie;

        return $this;
    }

    public function getDeCatcompta(): ?int
    {
        return $this->deCatcompta;
    }

    public function setDeCatcompta(?int $deCatcompta): self
    {
        $this->deCatcompta = $deCatcompta;

        return $this;
    }

    public function getDeEmplacement(): ?int
    {
        return $this->deEmplacement;
    }

    public function setDeEmplacement(?int $deEmplacement): self
    {
        $this->deEmplacement = $deEmplacement;

        return $this;
    }

    public function getDeSuivi(): ?int
    {
        return $this->deSuivi;
    }

    public function setDeSuivi(?int $deSuivi): self
    {
        $this->deSuivi = $deSuivi;

        return $this;
    }

    public function getDeType(): ?int
    {
        return $this->deType;
    }

    public function setDeType(?int $deType): self
    {
        $this->deType = $deType;

        return $this;
    }

    public function getDeDc(): ?int
    {
        return $this->deDc;
    }

    public function setDeDc(?int $deDc): self
    {
        $this->deDc = $deDc;

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

    public function getUgCode(): ?string
    {
        return $this->ugCode;
    }

    public function setUgCode(?string $ugCode): self
    {
        $this->ugCode = $ugCode;

        return $this;
    }

    
}
