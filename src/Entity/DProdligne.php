<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DProdligne
 *
 * @ORM\Table(name="D_PRODLIGNE")
 * @ORM\Entity
 */
class DProdligne
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="PE_Domaine", type="smallint", nullable=true)
     */
    private $peDomaine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PE_Type", type="smallint", nullable=true)
     */
    private $peType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Piece", type="string", length=50, nullable=true)
     */
    private $pePiece;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PL_Date", type="datetime", nullable=true)
     */
    private $plDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Statut", type="string", length=50, nullable=true)
     */
    private $peStatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Depot", type="string", length=50, nullable=true)
     */
    private $deDepot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CT_Num", type="string", length=50, nullable=true)
     */
    private $ctNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceBC", type="string", length=50, nullable=true)
     */
    private $doPiecebc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateBC", type="datetime", nullable=true)
     */
    private $doDatebc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Ref", type="string", length=69, nullable=true)
     */
    private $peRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="D_Projet", type="string", length=50, nullable=true)
     */
    private $dProjet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PL_ARCHIVE", type="smallint", nullable=true)
     */
    private $plArchive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Code", type="string", length=50, nullable=true)
     */
    private $rpCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Code", type="string", length=50, nullable=true)
     */
    private $ccCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Ref", type="string", length=50, nullable=true)
     */
    private $arRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PL_QteTheorique", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $plQtetheorique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PL_QTE", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $plQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Unite", type="string", length=50, nullable=true)
     */
    private $arUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Enumere1", type="string", length=100, nullable=true)
     */
    private $arEnumere1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Enumere2", type="string", length=100, nullable=true)
     */
    private $arEnumere2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Gamme1", type="smallint", nullable=true)
     */
    private $arGamme1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Gamme2", type="smallint", nullable=true)
     */
    private $arGamme2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PL_Montant", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $plMontant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PL_Formule", type="smallint", nullable=true)
     */
    private $plFormule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_RefProd", type="string", length=50, nullable=true)
     */
    private $arRefprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true)
     */
    private $emCode;

    /**
     * @var int
     *
     * @ORM\Column(name="CbMarq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CbCreateur", type="string", length=50, nullable=true)
     */
    private $cbcreateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CbCreation", type="datetime", nullable=true)
     */
    private $cbcreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CbModification", type="datetime", nullable=true)
     */
    private $cbmodification;

    public function getPeDomaine(): ?int
    {
        return $this->peDomaine;
    }

    public function setPeDomaine(?int $peDomaine): self
    {
        $this->peDomaine = $peDomaine;

        return $this;
    }

    public function getPeType(): ?int
    {
        return $this->peType;
    }

    public function setPeType(?int $peType): self
    {
        $this->peType = $peType;

        return $this;
    }

    public function getPePiece(): ?string
    {
        return $this->pePiece;
    }

    public function setPePiece(?string $pePiece): self
    {
        $this->pePiece = $pePiece;

        return $this;
    }

    public function getPlDate(): ?\DateTimeInterface
    {
        return $this->plDate;
    }

    public function setPlDate(?\DateTimeInterface $plDate): self
    {
        $this->plDate = $plDate;

        return $this;
    }

    public function getPeStatut(): ?string
    {
        return $this->peStatut;
    }

    public function setPeStatut(?string $peStatut): self
    {
        $this->peStatut = $peStatut;

        return $this;
    }

    public function getDeDepot(): ?string
    {
        return $this->deDepot;
    }

    public function setDeDepot(?string $deDepot): self
    {
        $this->deDepot = $deDepot;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): self
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getDoPiecebc(): ?string
    {
        return $this->doPiecebc;
    }

    public function setDoPiecebc(?string $doPiecebc): self
    {
        $this->doPiecebc = $doPiecebc;

        return $this;
    }

    public function getDoDatebc(): ?\DateTimeInterface
    {
        return $this->doDatebc;
    }

    public function setDoDatebc(?\DateTimeInterface $doDatebc): self
    {
        $this->doDatebc = $doDatebc;

        return $this;
    }

    public function getPeRef(): ?string
    {
        return $this->peRef;
    }

    public function setPeRef(?string $peRef): self
    {
        $this->peRef = $peRef;

        return $this;
    }

    public function getDProjet(): ?string
    {
        return $this->dProjet;
    }

    public function setDProjet(?string $dProjet): self
    {
        $this->dProjet = $dProjet;

        return $this;
    }

    public function getPlArchive(): ?int
    {
        return $this->plArchive;
    }

    public function setPlArchive(?int $plArchive): self
    {
        $this->plArchive = $plArchive;

        return $this;
    }

    public function getRpCode(): ?string
    {
        return $this->rpCode;
    }

    public function setRpCode(?string $rpCode): self
    {
        $this->rpCode = $rpCode;

        return $this;
    }

    public function getCcCode(): ?string
    {
        return $this->ccCode;
    }

    public function setCcCode(?string $ccCode): self
    {
        $this->ccCode = $ccCode;

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

    public function getPlQtetheorique(): ?string
    {
        return $this->plQtetheorique;
    }

    public function setPlQtetheorique(?string $plQtetheorique): self
    {
        $this->plQtetheorique = $plQtetheorique;

        return $this;
    }

    public function getPlQte(): ?string
    {
        return $this->plQte;
    }

    public function setPlQte(?string $plQte): self
    {
        $this->plQte = $plQte;

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

    public function getArEnumere1(): ?string
    {
        return $this->arEnumere1;
    }

    public function setArEnumere1(?string $arEnumere1): self
    {
        $this->arEnumere1 = $arEnumere1;

        return $this;
    }

    public function getArEnumere2(): ?string
    {
        return $this->arEnumere2;
    }

    public function setArEnumere2(?string $arEnumere2): self
    {
        $this->arEnumere2 = $arEnumere2;

        return $this;
    }

    public function getArGamme1(): ?int
    {
        return $this->arGamme1;
    }

    public function setArGamme1(?int $arGamme1): self
    {
        $this->arGamme1 = $arGamme1;

        return $this;
    }

    public function getArGamme2(): ?int
    {
        return $this->arGamme2;
    }

    public function setArGamme2(?int $arGamme2): self
    {
        $this->arGamme2 = $arGamme2;

        return $this;
    }

    public function getPlMontant(): ?string
    {
        return $this->plMontant;
    }

    public function setPlMontant(?string $plMontant): self
    {
        $this->plMontant = $plMontant;

        return $this;
    }

    public function getPlFormule(): ?int
    {
        return $this->plFormule;
    }

    public function setPlFormule(?int $plFormule): self
    {
        $this->plFormule = $plFormule;

        return $this;
    }

    public function getArRefprod(): ?string
    {
        return $this->arRefprod;
    }

    public function setArRefprod(?string $arRefprod): self
    {
        $this->arRefprod = $arRefprod;

        return $this;
    }

    public function getEmCode(): ?string
    {
        return $this->emCode;
    }

    public function setEmCode(?string $emCode): self
    {
        $this->emCode = $emCode;

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

    public function getCbcreation(): ?\DateTimeInterface
    {
        return $this->cbcreation;
    }

    public function setCbcreation(?\DateTimeInterface $cbcreation): self
    {
        $this->cbcreation = $cbcreation;

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
