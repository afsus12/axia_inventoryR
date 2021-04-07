<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMouvementligne
 *
 * @ORM\Table(name="D_MOUVEMENTLIGNE")
 * @ORM\Entity(repositoryClass="App\Repository\DMouvementligneRepository")
 */
class DMouvementligne
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_Domaine", type="smallint", nullable=true)
     */
    private $mvDomaine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_Type", type="smallint", nullable=true)
     */
    private $mvType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_Souche", type="string", length=50, nullable=true)
     */
    private $mvSouche;

    /**
     * @var string
     *
     * @ORM\Column(name="MV_Piece", type="string", length=50, nullable=false)
     */
    private $mvPiece;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MV_Date", type="datetime", nullable=true)
     */
    private $mvDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_Code", type="string", length=50, nullable=true)
     */
    private $mvCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_NumCaisse", type="string", length=50, nullable=true)
     */
    private $mvNumcaisse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_NumCaisseDest", type="string", length=50, nullable=true)
     */
    private $mvNumcaissedest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_ID", type="integer", nullable=true)
     */
    private $mvId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_Etat", type="smallint", nullable=true)
     */
    private $mvEtat;

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

    public function getMvDomaine(): ?int
    {
        return $this->mvDomaine;
    }

    public function setMvDomaine(?int $mvDomaine): self
    {
        $this->mvDomaine = $mvDomaine;

        return $this;
    }

    public function getMvType(): ?int
    {
        return $this->mvType;
    }

    public function setMvType(?int $mvType): self
    {
        $this->mvType = $mvType;

        return $this;
    }

    public function getMvSouche(): ?string
    {
        return $this->mvSouche;
    }

    public function setMvSouche(?string $mvSouche): self
    {
        $this->mvSouche = $mvSouche;

        return $this;
    }

    public function getMvPiece(): ?string
    {
        return $this->mvPiece;
    }

    public function setMvPiece(string $mvPiece): self
    {
        $this->mvPiece = $mvPiece;

        return $this;
    }

    public function getMvDate(): ?\DateTimeInterface
    {
        return $this->mvDate;
    }

    public function setMvDate(?\DateTimeInterface $mvDate): self
    {
        $this->mvDate = $mvDate;

        return $this;
    }

    public function getMvCode(): ?string
    {
        return $this->mvCode;
    }

    public function setMvCode(?string $mvCode): self
    {
        $this->mvCode = $mvCode;

        return $this;
    }

    public function getMvNumcaisse(): ?string
    {
        return $this->mvNumcaisse;
    }

    public function setMvNumcaisse(?string $mvNumcaisse): self
    {
        $this->mvNumcaisse = $mvNumcaisse;

        return $this;
    }

    public function getMvNumcaissedest(): ?string
    {
        return $this->mvNumcaissedest;
    }

    public function setMvNumcaissedest(?string $mvNumcaissedest): self
    {
        $this->mvNumcaissedest = $mvNumcaissedest;

        return $this;
    }

    public function getMvId(): ?int
    {
        return $this->mvId;
    }

    public function setMvId(?int $mvId): self
    {
        $this->mvId = $mvId;

        return $this;
    }

    public function getMvEtat(): ?int
    {
        return $this->mvEtat;
    }

    public function setMvEtat(?int $mvEtat): self
    {
        $this->mvEtat = $mvEtat;

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
