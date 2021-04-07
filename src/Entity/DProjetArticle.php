<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DProjetArticle
 *
 * @ORM\Table(name="D_PROJET_ARTICLE")
 * @ORM\Entity
 */
class DProjetArticle
{
    /**
     * @var string
     *
     * @ORM\Column(name="D_Code", type="string", length=50, nullable=false)
     */
    private $dCode;

    /**
     * @var string
     *
     * @ORM\Column(name="AR_Ref", type="string", length=50, nullable=false)
     */
    private $arRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EG_Enumere1", type="string", length=50, nullable=true)
     */
    private $egEnumere1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EG_Enumere2", type="string", length=50, nullable=true)
     */
    private $egEnumere2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Unite", type="string", length=50, nullable=true)
     */
    private $dlUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PrixUnitaire", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPrixunitaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_TotalHT", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlTotalht;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_TotalTTC", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlTotalttc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Taxe", type="string", length=50, nullable=true)
     */
    private $dlTaxe;

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

    public function getDCode(): ?string
    {
        return $this->dCode;
    }

    public function setDCode(string $dCode): self
    {
        $this->dCode = $dCode;

        return $this;
    }

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): self
    {
        $this->arRef = $arRef;

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

    public function getDlUnite(): ?string
    {
        return $this->dlUnite;
    }

    public function setDlUnite(?string $dlUnite): self
    {
        $this->dlUnite = $dlUnite;

        return $this;
    }

    public function getDlQte(): ?string
    {
        return $this->dlQte;
    }

    public function setDlQte(?string $dlQte): self
    {
        $this->dlQte = $dlQte;

        return $this;
    }

    public function getDlPrixunitaire(): ?string
    {
        return $this->dlPrixunitaire;
    }

    public function setDlPrixunitaire(?string $dlPrixunitaire): self
    {
        $this->dlPrixunitaire = $dlPrixunitaire;

        return $this;
    }

    public function getDlTotalht(): ?string
    {
        return $this->dlTotalht;
    }

    public function setDlTotalht(?string $dlTotalht): self
    {
        $this->dlTotalht = $dlTotalht;

        return $this;
    }

    public function getDlTotalttc(): ?string
    {
        return $this->dlTotalttc;
    }

    public function setDlTotalttc(?string $dlTotalttc): self
    {
        $this->dlTotalttc = $dlTotalttc;

        return $this;
    }

    public function getDlTaxe(): ?string
    {
        return $this->dlTaxe;
    }

    public function setDlTaxe(?string $dlTaxe): self
    {
        $this->dlTaxe = $dlTaxe;

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
