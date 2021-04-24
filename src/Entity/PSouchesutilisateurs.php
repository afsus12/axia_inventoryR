<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * PSouchesutilisateurs
 *
 * @ORM\Table(name="P_SOUCHESUTILISATEURS", indexes={@ORM\Index(name="IDX_8CF5FDF210A21063", columns={"PROT_User"})})
 * @ORM\Entity(repositoryClass="App\Repository\PSouchesutilisateursRepository")
 */
class PSouchesutilisateurs
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="S_Domaine", type="smallint", nullable=true)
     */
    private $sDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="S_Intitule", type="string", length=50, nullable=false)
     */
    private $sIntitule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ActiverMDP", type="smallint", nullable=true)
     */
    private $activermdp;

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

    public function getSDomaine(): ?int
    {
        return $this->sDomaine;
    }

    public function setSDomaine(?int $sDomaine): self
    {
        $this->sDomaine = $sDomaine;

        return $this;
    }

    public function getSIntitule(): ?string
    {
        return $this->sIntitule;
    }

    public function setSIntitule(string $sIntitule): self
    {
        $this->sIntitule = $sIntitule;

        return $this;
    }

    public function getActivermdp(): ?int
    {
        return $this->activermdp;
    }

    public function setActivermdp(?int $activermdp): self
    {
        $this->activermdp = $activermdp;

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
