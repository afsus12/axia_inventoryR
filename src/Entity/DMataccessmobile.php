<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * DMataccessmobile
 *
 * @ORM\Table(name="D_MATACCESSMOBILE")
 * @ORM\Entity(repositoryClass="App\Repository\DMataccessmobileRepository")  
 */
class DMataccessmobile
{
    /**
     * @var string
     *
     * @ORM\Column(name="PROT_User", type="string", length=50, nullable=false)
     */
    private $protUser;

    /**
     * @var bool
     *
     * @ORM\Column(name="MA_AccessEntree", type="boolean", nullable=false)
     */
    private $maAccessentree;

    /**
     * @var bool
     *
     * @ORM\Column(name="MA_AccessSortie", type="boolean", nullable=false)
     */
    private $maAccesssortie;

    /**
     * @var bool
     *
     * @ORM\Column(name="MA_AccessTransfert", type="boolean", nullable=false)
     */
    private $maAccesstransfert;

    /**
     * @var bool
     *
     * @ORM\Column(name="MA_AccessInventaire", type="boolean", nullable=false)
     */
    private $maAccessinventaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="MA_AccessConsultaiton", type="boolean", nullable=false)
     */
    private $maAccessconsultaiton;

    /**
     * @var bool
     *
     * @ORM\Column(name="MA_AccessGestionUtil", type="boolean", nullable=false)
     */
    private $maAccessgestionutil;

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

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MA_CreatedAt", type="datetime", nullable=false)
     */
    private $maCreatedat;

    public function getProtUser(): ?string
    {
        return $this->protUser;
    }

    public function setProtUser(string $protUser): self
    {
        $this->protUser = $protUser;

        return $this;
    }

    public function getMaAccessentree(): ?bool
    {
        return $this->maAccessentree;
    }

    public function setMaAccessentree(bool $maAccessentree): self
    {
        $this->maAccessentree = $maAccessentree;

        return $this;
    }

    public function getMaAccesssortie(): ?bool
    {
        return $this->maAccesssortie;
    }

    public function setMaAccesssortie(bool $maAccesssortie): self
    {
        $this->maAccesssortie = $maAccesssortie;

        return $this;
    }

    public function getMaAccesstransfert(): ?bool
    {
        return $this->maAccesstransfert;
    }

    public function setMaAccesstransfert(bool $maAccesstransfert): self
    {
        $this->maAccesstransfert = $maAccesstransfert;

        return $this;
    }

    public function getMaAccessinventaire(): ?bool
    {
        return $this->maAccessinventaire;
    }

    public function setMaAccessinventaire(bool $maAccessinventaire): self
    {
        $this->maAccessinventaire = $maAccessinventaire;

        return $this;
    }

    public function getMaAccessconsultaiton(): ?bool
    {
        return $this->maAccessconsultaiton;
    }

    public function setMaAccessconsultaiton(bool $maAccessconsultaiton): self
    {
        $this->maAccessconsultaiton = $maAccessconsultaiton;

        return $this;
    }

    public function getMaAccessgestionutil(): ?bool
    {
        return $this->maAccessgestionutil;
    }

    public function setMaAccessgestionutil(bool $maAccessgestionutil): self
    {
        $this->maAccessgestionutil = $maAccessgestionutil;

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

    public function getMaCreatedat(): ?\DateTimeInterface
    {
        return $this->maCreatedat;
    }

    public function setMaCreatedat(\DateTimeInterface $maCreatedat): self
    {
        $this->maCreatedat = $maCreatedat;

        return $this;
    }


}
