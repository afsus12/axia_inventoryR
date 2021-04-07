<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DFamille
 *
 * @ORM\Table(name="D_FAMILLE", uniqueConstraints={@ORM\UniqueConstraint(name="UK_FA_CodeFamille", columns={"FA_CodeFamille"})})
 * @ORM\Entity
 */
class DFamille
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_FamGlob", type="string", length=50, nullable=true)
     */
    private $faFamglob;

    /**
     * @var string
     *
     * @ORM\Column(name="FA_CodeParent", type="string", length=50, nullable=false)
     */
    private $faCodeparent;

    /**
     * @var string
     *
     * @ORM\Column(name="FA_CodeFamille", type="string", length=50, nullable=false)
     */
    private $faCodefamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_Intitule", type="string", length=50, nullable=true)
     */
    private $faIntitule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FA_Type", type="smallint", nullable=true)
     */
    private $faType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_Unite", type="string", length=50, nullable=true)
     */
    private $faUnite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FA_SuiviStock", type="smallint", nullable=true)
     */
    private $faSuivistock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_CodeFiscal", type="string", length=50, nullable=true)
     */
    private $faCodefiscal;

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
     * @var int|null
     *
     * @ORM\Column(name="FA_HorsStat", type="smallint", nullable=true)
     */
    private $faHorsstat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_MaxRemise", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $faMaxremise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FA_PaysDorigine", type="string", length=50, nullable=true)
     */
    private $faPaysdorigine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FA_Publier", type="smallint", nullable=true)
     */
    private $faPublier;

    public function getFaFamglob(): ?string
    {
        return $this->faFamglob;
    }

    public function setFaFamglob(?string $faFamglob): self
    {
        $this->faFamglob = $faFamglob;

        return $this;
    }

    public function getFaCodeparent(): ?string
    {
        return $this->faCodeparent;
    }

    public function setFaCodeparent(string $faCodeparent): self
    {
        $this->faCodeparent = $faCodeparent;

        return $this;
    }

    public function getFaCodefamille(): ?string
    {
        return $this->faCodefamille;
    }

    public function setFaCodefamille(string $faCodefamille): self
    {
        $this->faCodefamille = $faCodefamille;

        return $this;
    }

    public function getFaIntitule(): ?string
    {
        return $this->faIntitule;
    }

    public function setFaIntitule(?string $faIntitule): self
    {
        $this->faIntitule = $faIntitule;

        return $this;
    }

    public function getFaType(): ?int
    {
        return $this->faType;
    }

    public function setFaType(?int $faType): self
    {
        $this->faType = $faType;

        return $this;
    }

    public function getFaUnite(): ?string
    {
        return $this->faUnite;
    }

    public function setFaUnite(?string $faUnite): self
    {
        $this->faUnite = $faUnite;

        return $this;
    }

    public function getFaSuivistock(): ?int
    {
        return $this->faSuivistock;
    }

    public function setFaSuivistock(?int $faSuivistock): self
    {
        $this->faSuivistock = $faSuivistock;

        return $this;
    }

    public function getFaCodefiscal(): ?string
    {
        return $this->faCodefiscal;
    }

    public function setFaCodefiscal(?string $faCodefiscal): self
    {
        $this->faCodefiscal = $faCodefiscal;

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

    public function getFaHorsstat(): ?int
    {
        return $this->faHorsstat;
    }

    public function setFaHorsstat(?int $faHorsstat): self
    {
        $this->faHorsstat = $faHorsstat;

        return $this;
    }

    public function getFaMaxremise(): ?string
    {
        return $this->faMaxremise;
    }

    public function setFaMaxremise(?string $faMaxremise): self
    {
        $this->faMaxremise = $faMaxremise;

        return $this;
    }

    public function getFaPaysdorigine(): ?string
    {
        return $this->faPaysdorigine;
    }

    public function setFaPaysdorigine(?string $faPaysdorigine): self
    {
        $this->faPaysdorigine = $faPaysdorigine;

        return $this;
    }

    public function getFaPublier(): ?int
    {
        return $this->faPublier;
    }

    public function setFaPublier(?int $faPublier): self
    {
        $this->faPublier = $faPublier;

        return $this;
    }


}
