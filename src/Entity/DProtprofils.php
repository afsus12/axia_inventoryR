<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DProtprofils
 *
 * @ORM\Table(name="D_PROTPROFILS")
 * @ORM\Entity
 */
class DProtprofils
{
    /**
     * @var string
     *
     * @ORM\Column(name="PRO_Code", type="string", length=50, nullable=false)
     */
    private $proCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRO_Intitule", type="string", length=50, nullable=true)
     */
    private $proIntitule;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true)
     */
    private $cbmodification;

    public function getProCode(): ?string
    {
        return $this->proCode;
    }

    public function setProCode(string $proCode): self
    {
        $this->proCode = $proCode;

        return $this;
    }

    public function getProIntitule(): ?string
    {
        return $this->proIntitule;
    }

    public function setProIntitule(?string $proIntitule): self
    {
        $this->proIntitule = $proIntitule;

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
