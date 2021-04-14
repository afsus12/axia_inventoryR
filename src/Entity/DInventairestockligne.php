<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DInventairestockligne
 *
 * @ORM\Table(name="D_INVENTAIRESTOCKLIGNE")
 * @ORM\Entity(repositoryClass="App\Repository\DInventairestockligneRepository") 
 */
class DInventairestockligne
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="PI_Intitule", type="string", length=100, nullable=true)
     */
    private $piIntitule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_CodeFamille", type="string", length=100, nullable=true)
     */
    private $faCodefamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=100, nullable=true)
     */
    private $deCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Ref", type="string", length=50, nullable=true)
     */
    private $arRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Design", type="string", length=100, nullable=true)
     */
    private $arDesign;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Type", type="smallint", nullable=true)
     */
    private $arType;

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
     * @ORM\Column(name="AR_Unite", type="string", length=100, nullable=true)
     */
    private $arUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme1", type="string", length=100, nullable=true)
     */
    private $gamme1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme2", type="string", length=100, nullable=true)
     */
    private $gamme2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_Qte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $isQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_CMUP", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $isCmup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_QteA", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $isQtea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_PrixA", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $isPrixa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_Code", type="string", length=100, nullable=true)
     */
    private $isCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_DifferencePrix", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $isDifferenceprix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_DifferenceQte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $isDifferenceqte;

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
     * @ORM\Column(name="cbModification", type="datetime", nullable=true)
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LS_NoSerie", type="string", length=50, nullable=true)
     */
    private $lsNoserie;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LS_Peremption", type="datetime", nullable=true)
     */
    private $lsPeremption;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LS_Fabrication", type="datetime", nullable=true)
     */
    private $lsFabrication;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LS_Complement", type="string", length=50, nullable=true)
     */
    private $lsComplement;

    public function getPiIntitule(): ?string
    {
        return $this->piIntitule;
    }

    public function setPiIntitule(?string $piIntitule): self
    {
        $this->piIntitule = $piIntitule;

        return $this;
    }

    public function getFaCodefamille(): ?string
    {
        return $this->faCodefamille;
    }

    public function setFaCodefamille(?string $faCodefamille): self
    {
        $this->faCodefamille = $faCodefamille;

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

    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(?string $arRef): self
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getArDesign(): ?string
    {
        return $this->arDesign;
    }

    public function setArDesign(?string $arDesign): self
    {
        $this->arDesign = $arDesign;

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

    public function getArUnite(): ?string
    {
        return $this->arUnite;
    }

    public function setArUnite(?string $arUnite): self
    {
        $this->arUnite = $arUnite;

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

    public function getIsQte(): ?string
    {
        return $this->isQte;
    }

    public function setIsQte(?string $isQte): self
    {
        $this->isQte = $isQte;

        return $this;
    }

    public function getIsCmup(): ?string
    {
        return $this->isCmup;
    }

    public function setIsCmup(?string $isCmup): self
    {
        $this->isCmup = $isCmup;

        return $this;
    }

    public function getIsQtea(): ?string
    {
        return $this->isQtea;
    }

    public function setIsQtea(?string $isQtea): self
    {
        $this->isQtea = $isQtea;

        return $this;
    }

    public function getIsPrixa(): ?string
    {
        return $this->isPrixa;
    }

    public function setIsPrixa(?string $isPrixa): self
    {
        $this->isPrixa = $isPrixa;

        return $this;
    }

    public function getIsCode(): ?string
    {
        return $this->isCode;
    }

    public function setIsCode(?string $isCode): self
    {
        $this->isCode = $isCode;

        return $this;
    }

    public function getIsDifferenceprix(): ?string
    {
        return $this->isDifferenceprix;
    }

    public function setIsDifferenceprix(?string $isDifferenceprix): self
    {
        $this->isDifferenceprix = $isDifferenceprix;

        return $this;
    }

    public function getIsDifferenceqte(): ?string
    {
        return $this->isDifferenceqte;
    }

    public function setIsDifferenceqte(?string $isDifferenceqte): self
    {
        $this->isDifferenceqte = $isDifferenceqte;

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

 
    
    public function setCbmodification(\DateTimeInterface $cbmodification): self
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getLsNoserie(): ?string
    {
        return $this->lsNoserie;
    }

    public function setLsNoserie(?string $lsNoserie): self
    {
        $this->lsNoserie = $lsNoserie;

        return $this;
    }

    public function getLsPeremption(): ?\DateTimeInterface
    {
        return $this->lsPeremption;
    }

    public function setLsPeremption(?\DateTimeInterface $lsPeremption): self
    {
        $this->lsPeremption = $lsPeremption;

        return $this;
    }

    public function getLsFabrication(): ?\DateTimeInterface
    {
        return $this->lsFabrication;
    }

    public function setLsFabrication(?\DateTimeInterface $lsFabrication): self
    {
        $this->lsFabrication = $lsFabrication;

        return $this;
    }

    public function getLsComplement(): ?string
    {
        return $this->lsComplement;
    }

    public function setLsComplement(?string $lsComplement): self
    {
        $this->lsComplement = $lsComplement;

        return $this;
    }


}
