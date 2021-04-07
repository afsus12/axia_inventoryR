<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DProdentete
 *
 * @ORM\Table(name="D_PRODENTETE")
 * @ORM\Entity
 */
class DProdentete
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
     * @var int|null
     *
     * @ORM\Column(name="DO_Nature", type="smallint", nullable=true)
     */
    private $doNature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Valide", type="smallint", nullable=true)
     */
    private $doValide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Souche", type="string", length=50, nullable=true)
     */
    private $peSouche;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PE_Date", type="datetime", nullable=true)
     */
    private $peDate;

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
     * @var int|null
     *
     * @ORM\Column(name="PE_Print", type="smallint", nullable=true)
     */
    private $pePrint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Commentaires", type="text", length=-1, nullable=true)
     */
    private $peCommentaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMP_Code", type="string", length=50, nullable=true)
     */
    private $empCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true)
     */
    private $emCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="D_Projet", type="string", length=50, nullable=true)
     */
    private $dProjet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PE_DateLivPrev", type="datetime", nullable=true)
     */
    private $peDatelivprev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PE_ARCHIVE", type="datetime", nullable=true)
     */
    private $peArchive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GR_Code", type="string", length=50, nullable=true)
     */
    private $grCode;

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
     * @ORM\Column(name="PE_Qte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $peQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_QTEBC", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQtebc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Unite", type="string", length=50, nullable=true)
     */
    private $arUnite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PL_Id", type="integer", nullable=true)
     */
    private $plId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FO_Code", type="string", length=50, nullable=true)
     */
    private $foCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Montant", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $peMontant;

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
     * @ORM\Column(name="PE_Coord1", type="string", length=50, nullable=true)
     */
    private $peCoord1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Coord2", type="string", length=50, nullable=true)
     */
    private $peCoord2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PE_DateDebut", type="datetime", nullable=true)
     */
    private $peDatedebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PE_DateFin", type="datetime", nullable=true)
     */
    private $peDatefin;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Coord3", type="string", length=50, nullable=true)
     */
    private $peCoord3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PE_Coord4", type="string", length=50, nullable=true)
     */
    private $peCoord4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceBL", type="string", length=50, nullable=true)
     */
    private $doPiecebl;

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

    public function getDoNature(): ?int
    {
        return $this->doNature;
    }

    public function setDoNature(?int $doNature): self
    {
        $this->doNature = $doNature;

        return $this;
    }

    public function getDoValide(): ?int
    {
        return $this->doValide;
    }

    public function setDoValide(?int $doValide): self
    {
        $this->doValide = $doValide;

        return $this;
    }

    public function getPeSouche(): ?string
    {
        return $this->peSouche;
    }

    public function setPeSouche(?string $peSouche): self
    {
        $this->peSouche = $peSouche;

        return $this;
    }

    public function getPeDate(): ?\DateTimeInterface
    {
        return $this->peDate;
    }

    public function setPeDate(?\DateTimeInterface $peDate): self
    {
        $this->peDate = $peDate;

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

    public function getPePrint(): ?int
    {
        return $this->pePrint;
    }

    public function setPePrint(?int $pePrint): self
    {
        $this->pePrint = $pePrint;

        return $this;
    }

    public function getPeCommentaires(): ?string
    {
        return $this->peCommentaires;
    }

    public function setPeCommentaires(?string $peCommentaires): self
    {
        $this->peCommentaires = $peCommentaires;

        return $this;
    }

    public function getEmpCode(): ?string
    {
        return $this->empCode;
    }

    public function setEmpCode(?string $empCode): self
    {
        $this->empCode = $empCode;

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

    public function getDProjet(): ?string
    {
        return $this->dProjet;
    }

    public function setDProjet(?string $dProjet): self
    {
        $this->dProjet = $dProjet;

        return $this;
    }

    public function getPeDatelivprev(): ?\DateTimeInterface
    {
        return $this->peDatelivprev;
    }

    public function setPeDatelivprev(?\DateTimeInterface $peDatelivprev): self
    {
        $this->peDatelivprev = $peDatelivprev;

        return $this;
    }

    public function getPeArchive(): ?\DateTimeInterface
    {
        return $this->peArchive;
    }

    public function setPeArchive(?\DateTimeInterface $peArchive): self
    {
        $this->peArchive = $peArchive;

        return $this;
    }

    public function getGrCode(): ?string
    {
        return $this->grCode;
    }

    public function setGrCode(?string $grCode): self
    {
        $this->grCode = $grCode;

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

    public function getPeQte(): ?string
    {
        return $this->peQte;
    }

    public function setPeQte(?string $peQte): self
    {
        $this->peQte = $peQte;

        return $this;
    }

    public function getDlQtebc(): ?string
    {
        return $this->dlQtebc;
    }

    public function setDlQtebc(?string $dlQtebc): self
    {
        $this->dlQtebc = $dlQtebc;

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

    public function getPlId(): ?int
    {
        return $this->plId;
    }

    public function setPlId(?int $plId): self
    {
        $this->plId = $plId;

        return $this;
    }

    public function getFoCode(): ?string
    {
        return $this->foCode;
    }

    public function setFoCode(?string $foCode): self
    {
        $this->foCode = $foCode;

        return $this;
    }

    public function getPeMontant(): ?string
    {
        return $this->peMontant;
    }

    public function setPeMontant(?string $peMontant): self
    {
        $this->peMontant = $peMontant;

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

    public function getPeCoord1(): ?string
    {
        return $this->peCoord1;
    }

    public function setPeCoord1(?string $peCoord1): self
    {
        $this->peCoord1 = $peCoord1;

        return $this;
    }

    public function getPeCoord2(): ?string
    {
        return $this->peCoord2;
    }

    public function setPeCoord2(?string $peCoord2): self
    {
        $this->peCoord2 = $peCoord2;

        return $this;
    }

    public function getPeDatedebut(): ?\DateTimeInterface
    {
        return $this->peDatedebut;
    }

    public function setPeDatedebut(?\DateTimeInterface $peDatedebut): self
    {
        $this->peDatedebut = $peDatedebut;

        return $this;
    }

    public function getPeDatefin(): ?\DateTimeInterface
    {
        return $this->peDatefin;
    }

    public function setPeDatefin(?\DateTimeInterface $peDatefin): self
    {
        $this->peDatefin = $peDatefin;

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

    public function getPeCoord3(): ?string
    {
        return $this->peCoord3;
    }

    public function setPeCoord3(?string $peCoord3): self
    {
        $this->peCoord3 = $peCoord3;

        return $this;
    }

    public function getPeCoord4(): ?string
    {
        return $this->peCoord4;
    }

    public function setPeCoord4(?string $peCoord4): self
    {
        $this->peCoord4 = $peCoord4;

        return $this;
    }

    public function getDoPiecebl(): ?string
    {
        return $this->doPiecebl;
    }

    public function setDoPiecebl(?string $doPiecebl): self
    {
        $this->doPiecebl = $doPiecebl;

        return $this;
    }


}
