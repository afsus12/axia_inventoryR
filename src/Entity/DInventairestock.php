<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DInventairestock
 *
 * @ORM\Table(name="D_INVENTAIRESTOCK")
 * @ORM\Entity(repositoryClass="App\Repository\DInventairestockRepository") 
 */
class DInventairestock
{
    /**
     * @var string
     *
     * @ORM\Column(name="PI_Intitule", type="string", length=50, nullable=false)
     */
    private $piIntitule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_CodeFamille", type="string", length=50, nullable=true)
     */
    private $faCodefamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true)
     */
    private $deCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_Code", type="string", length=50, nullable=true)
     */
    private $isCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="IS_Date", type="datetime", nullable=false)
     */
    private $isDate='CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="IS_Remarques", type="string", length=500, nullable=true)
     */
    private $isRemarques;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IS_Valide", type="smallint", nullable=true)
     */
    private $isValide;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IS_SO", type="integer", nullable=true)
     */
    private $isSo;

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
     * @var \DateTime
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true)
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    public function getPiIntitule(): ?string
    {
        return $this->piIntitule;
    }

    public function setPiIntitule(string $piIntitule): self
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

    public function getIsCode(): ?string
    {
        return $this->isCode;
    }

    public function setIsCode(?string $isCode): self
    {
        $this->isCode = $isCode;

        return $this;
    }

    public function getIsDate(): ?\DateTime
    {
        return $this->isDate;
    }
      
    
    public function setIsDate(\DateTime $isDate): self
    {
        $this->isDate = $isDate;

        return $this;
    }

    public function getIsRemarques(): ?string
    {
        return $this->isRemarques;
    }

    public function setIsRemarques(?string $isRemarques): self
    {
        $this->isRemarques = $isRemarques;

        return $this;
    }

    public function getIsValide(): ?int
    {
        return $this->isValide;
    }

    public function setIsValide(?int $isValide): self
    {
        $this->isValide = $isValide;

        return $this;
    }

    public function getIsSo(): ?int
    {
        return $this->isSo;
    }

    public function setIsSo(?int $isSo): self
    {
        $this->isSo = $isSo;

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


}
