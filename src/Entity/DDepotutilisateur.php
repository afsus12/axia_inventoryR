<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DDepotutilisateur
 *
 * @ORM\Table(name="D_DEPOTUTILISATEUR", indexes={@ORM\Index(name="IDX_208B763B3E9D0D6B", columns={"DE_Code"}), @ORM\Index(name="IDX_208B763B10A21063", columns={"PROT_User"})})
 * @ORM\Entity(repositoryClass="App\Repository\DDepotutilisateurRepository")
 */
class DDepotutilisateur
{
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
     * @var \DDepot
     *
     * @ORM\ManyToOne(targetEntity="DDepot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DE_Code", referencedColumnName="DE_Code")
     * })
     */
    private $deCode;

    /**
     * @var \DProtusers
     *
     * @ORM\ManyToOne(targetEntity="DProtusers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROT_User", referencedColumnName="PROT_User")
     * })
     */
    private $protUser;

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

    public function getDeCode(): ?DDepot
    {
        return $this->deCode;
    }

    public function setDeCode(?DDepot $deCode): self
    {
        $this->deCode = $deCode;

        return $this;
    }

    public function getProtUser(): ?DProtusers
    {
        return $this->protUser;
    }

    public function setProtUser(?DProtusers $protUser): self
    {
        $this->protUser = $protUser;

        return $this;
    }


}
