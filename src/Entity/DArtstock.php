<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\DArticle;
use App\Entity\DDepot;

/**
 * DArtstock
 *
 * @ORM\Table(name="D_ARTSTOCK")
 * @ORM\Entity(repositoryClass="App\Repository\DArtstockRepository")
 */
class DArtstock
{
    /**
     * @var string
     * @ORM\Column(name="[AR_Ref]", type="string", length=50, nullable=false, options={"comment"="Référence de l'article"})
     */
    private $arRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Type", type="smallint", nullable=true)
     */
    private $arType;

    /**
     * @var string
     * @ORM\Column(name="[DE_Code]", type="string", length=50, nullable=false, options={"comment"="Code dépôt"})
     */
    private $deCode;

    /**
     * @var float
     *
     * @ORM\Column(name="[AS_QteSto]", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Quantité stock"})
     */
    private $asQtesto;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_CMUP", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="CMUP"})
     */
    private $asCmup;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_AncCmup", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $asAnccmup;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_DPA", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Dérnier prix d'achat"})
     */
    private $asDpa;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_MontSto", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Montant stock"})
     */
    private $asMontsto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EG_Enumere1", type="string", length=100, nullable=true)
     */
    private $egEnumere1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EG_Enumere2", type="string", length=100, nullable=true)
     */
    private $egEnumere2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme1", type="string", length=50, nullable=true)
     */
    private $gamme1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme2", type="string", length=50, nullable=true)
     */
    private $gamme2;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_QteMini", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Quantité minimale"})
     */
    private $asQtemini;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_QteMaxi", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Quantité maximale"})
     */
    private $asQtemaxi;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_QteCmd", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Quantité commandée"})
     */
    private $asQtecmd;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_QteRes", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Quantité réservée"})
     */
    private $asQteres;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_QteReserv", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $asQtereserv;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="cbMarq", type="integer", nullable=false, options={"comment"="ID unique"})
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true, options={"default"="CSQL","comment"="Createur (Utilisateur)"})
     */
    private $cbcreateur = 'CSQL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true,)
     */
    private $cbmodification ;

 


    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): self
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getArType(): ?int
    {
        return $this->arType;
    }

    public function setArType(?int $arType): self
    {
        $this->arType = $arType;

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

    public function getAsQtesto(): ?float
    {
        return $this->asQtesto;
    }

    public function setAsQtesto(?float $asQtesto): self
    {
        $this->asQtesto = $asQtesto;

        return $this;
    }

    public function getAsCmup(): ?float
    {
        return $this->asCmup;
    }

    public function setAsCmup(?float $asCmup): self
    {
        $this->asCmup = $asCmup;

        return $this;
    }

    public function getAsAnccmup(): ?float
    {
        return $this->asAnccmup;
    }

    public function setAsAnccmup(?float $asAnccmup): self
    {
        $this->asAnccmup = $asAnccmup;

        return $this;
    }

    public function getAsDpa(): ?float
    {
        return $this->asDpa;
    }

    public function setAsDpa(?float $asDpa): self
    {
        $this->asDpa = $asDpa;

        return $this;
    }

    public function getAsMontsto(): ?float
    {
        return $this->asMontsto;
    }

    public function setAsMontsto(?float $asMontsto): self
    {
        $this->asMontsto = $asMontsto;

        return $this;
    }

    public function getEgEnumere1(): ?string
    {
        return $this->egEnumere1;
    }

    public function setEgEnumere1(?string $egEnumere1): self
    {
        $this->egEnumere1 = $egEnumere1;

        return $this;
    }

    public function getEgEnumere2(): ?string
    {
        return $this->egEnumere2;
    }

    public function setEgEnumere2(?string $egEnumere2): self
    {
        $this->egEnumere2 = $egEnumere2;

        return $this;
    }

    public function getGamme1(): ?string
    {
        return $this->gamme1;
    }

    public function setGamme1(?string $gamme1): self
    {
        $this->gamme1 = $gamme1;

        return $this;
    }

    public function getGamme2(): ?string
    {
        return $this->gamme2;
    }

    public function setGamme2(?string $gamme2): self
    {
        $this->gamme2 = $gamme2;

        return $this;
    }

    public function getAsQtemini(): ?float
    {
        return $this->asQtemini;
    }

    public function setAsQtemini(?float $asQtemini): self
    {
        $this->asQtemini = $asQtemini;

        return $this;
    }

    public function getAsQtemaxi(): ?float
    {
        return $this->asQtemaxi;
    }

    public function setAsQtemaxi(?float $asQtemaxi): self
    {
        $this->asQtemaxi = $asQtemaxi;

        return $this;
    }

    public function getAsQtecmd(): ?float
    {
        return $this->asQtecmd;
    }

    public function setAsQtecmd(?float $asQtecmd): self
    {
        $this->asQtecmd = $asQtecmd;

        return $this;
    }

    public function getAsQteres(): ?float
    {
        return $this->asQteres;
    }

    public function setAsQteres(?float $asQteres): self
    {
        $this->asQteres = $asQteres;

        return $this;
    }

    public function getAsQtereserv(): ?string
    {
        return $this->asQtereserv;
    }

    public function setAsQtereserv(?string $asQtereserv): self
    {
        $this->asQtereserv = $asQtereserv;

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

  
   

    public function setCbmarq(int $cbmarq): self
    {
        $this->cbmarq = $cbmarq;

        return $this;
    }


}
