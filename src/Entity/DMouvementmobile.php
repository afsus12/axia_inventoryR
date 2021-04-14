<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMouvementmobil
 *
 * @ORM\Table(name="D_MOUVEMENTMOBIL")
 * @ORM\Entity(repositoryClass="App\Repository\DMouvementmobileRepository")
 */
class DMouvementmobile
{
    /**
     * @var string
     *
     * @ORM\Column(name="AR_Ref", type="string", length=50, nullable=false)
     */
    private $arRef;

    /**
     * @var string
     *
     * @ORM\Column(name="AR_CodeBarre", type="string", length=50, nullable=false)
     */
    private $arCodebarre;

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

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MB_Createdat", type="datetime", nullable=false)
     */
    private $mbCreatedat;

    /**
     * @var float
     *
     * @ORM\Column(name="MB_Qteentre", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $mbQteentre;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_QteSto", type="decimal", precision=24, scale=6, nullable=false)
     */
    private $asQtesto;

    /**
     * @var float
     *
     * @ORM\Column(name="AS_MontSto", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $asMontsto;

    /**
     * @var float
     *
     * @ORM\Column(name="MB_Qtesortie", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $mbQtesortie;

    /**
     * @var float
     *
     * @ORM\Column(name="MB_Qtetrans", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $mbQtetrans;

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
     * @ORM\Column(name="MB_Decodeorig", type="string", length=50, nullable=true)
     */
    private $mbDecodeorig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MB_Deintituorig", type="string", length=50, nullable=true)
     */
    private $mbDeintituorig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MB_Decodedes", type="string", length=50, nullable=true)
     */
    private $mbDecodedes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MB_Deintitudes", type="string", length=50, nullable=true)
     */
    private $mbDeintitudes;

    /**
     * @var string
     *
     * @ORM\Column(name="MB_Type", type="string", length=50, nullable=false)
     */
    private $mbType;

    /**
     * @var string
     *
     * @ORM\Column(name="PROT_User", type="string", length=50, nullable=false)
     */
    private $protUser;

    /**
     * @var float
     *
     * @ORM\Column(name="MB_QteAncien", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $mbQteancien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true)
     */
    private $deCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Intitule", type="string", length=50, nullable=true)
     */
    private $deIntitule;

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): self
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getArCodebarre(): ?string
    {
        return $this->arCodebarre;
    }

    public function setArCodebarre(string $arCodebarre): self
    {
        $this->arCodebarre = $arCodebarre;

        return $this;
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

    public function getMbCreatedat(): ?\DateTimeInterface
    {
        return $this->mbCreatedat;
    }

    public function setMbCreatedat(\DateTimeInterface $mbCreatedat): self
    {
        $this->mbCreatedat = $mbCreatedat;

        return $this;
    }

    public function getMbQteentre(): ?float
    {
        return $this->mbQteentre;
    }

    public function setMbQteentre(?float $mbQteentre): self
    {
        $this->mbQteentre = $mbQteentre;

        return $this;
    }

    public function getAsQtesto(): ?float
    {
        return $this->asQtesto;
    }

    public function setAsQtesto(float $asQtesto): self
    {
        $this->asQtesto = $asQtesto;

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

    public function getMbQtesortie(): ?float
    {
        return $this->mbQtesortie;
    }

    public function setMbQtesortie(?float $mbQtesortie): self
    {
        $this->mbQtesortie = $mbQtesortie;

        return $this;
    }

    public function getMbQtetrans(): ?float
    {
        return $this->mbQtetrans;
    }

    public function setMbQtetrans(?float $mbQtetrans): self
    {
        $this->mbQtetrans = $mbQtetrans;

        return $this;
    }

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getMbDecodeorig(): ?string
    {
        return $this->mbDecodeorig;
    }

    public function setMbDecodeorig(?string $mbDecodeorig): self
    {
        $this->mbDecodeorig = $mbDecodeorig;

        return $this;
    }

    public function getMbDeintituorig(): ?string
    {
        return $this->mbDeintituorig;
    }

    public function setMbDeintituorig(?string $mbDeintituorig): self
    {
        $this->mbDeintituorig = $mbDeintituorig;

        return $this;
    }

    public function getMbDecodedes(): ?string
    {
        return $this->mbDecodedes;
    }

    public function setMbDecodedes(?string $mbDecodedes): self
    {
        $this->mbDecodedes = $mbDecodedes;

        return $this;
    }

    public function getMbDeintitudes(): ?string
    {
        return $this->mbDeintitudes;
    }

    public function setMbDeintitudes(?string $mbDeintitudes): self
    {
        $this->mbDeintitudes = $mbDeintitudes;

        return $this;
    }

    public function getMbType(): ?string
    {
        return $this->mbType;
    }

    public function setMbType(string $mbType): self
    {
        $this->mbType = $mbType;

        return $this;
    }

    public function getProtUser(): ?string
    {
        return $this->protUser;
    }

    public function setProtUser(string $protUser): self
    {
        $this->protUser = $protUser;

        return $this;
    }

    public function getMbQteancien(): ?float
    {
        return $this->mbQteancien;
    }

    public function setMbQteancien(?float $mbQteancien): self
    {
        $this->mbQteancien = $mbQteancien;

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

    public function getDeIntitule(): ?string
    {
        return $this->deIntitule;
    }

    public function setDeIntitule(?string $deIntitule): self
    {
        $this->deIntitule = $deIntitule;

        return $this;
    }


}
