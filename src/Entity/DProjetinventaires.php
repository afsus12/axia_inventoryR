<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DProjetinventaires
 *
 * @ORM\Table(name="D_PROJETINVENTAIRES")
 * @ORM\Entity
 */
class DProjetinventaires
{
    /**
     * @var string
     *
     * @ORM\Column(name="PI_Intitule", type="string", length=50, nullable=false)
     */
    private $piIntitule;

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

    public function getPiIntitule(): ?string
    {
        return $this->piIntitule;
    }

    public function setPiIntitule(string $piIntitule): self
    {
        $this->piIntitule = $piIntitule;

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
