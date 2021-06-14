<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PPreferencesmobile
 *
 * @ORM\Table(name="P_PreferencesMobile")
 * @ORM\Entity(repositoryClass="App\Repository\PPreferencesmobileRepository") 
 */
class PPreferencesmobile
{
    /**
     * @var string
     *
     * @ORM\Column(name="PROTM_User", type="string", length=50, nullable=false)
     */
    private $protmUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PM_Date", type="datetime", nullable=false)
     */
    private $pmDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="PM_images", type="boolean", nullable=false)
     */
    private $pmImages;

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

    public function getProtmUser(): ?string
    {
        return $this->protmUser;
    }

    public function setProtmUser(string $protmUser): self
    {
        $this->protmUser = $protmUser;

        return $this;
    }

    public function getPmDate(): ?\DateTimeInterface
    {
        return $this->pmDate;
    }

    public function setPmDate(\DateTimeInterface $pmDate): self
    {
        $this->pmDate = $pmDate;

        return $this;
    }

    public function getPmImages(): ?bool
    {
        return $this->pmImages;
    }

    public function setPmImages(bool $pmImages): self
    {
        $this->pmImages = $pmImages;

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
