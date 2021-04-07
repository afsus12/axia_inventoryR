<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DEntetedemandes
 *
 * @ORM\Table(name="D_ENTETEDEMANDES")
 * @ORM\Entity
 */
class DEntetedemandes
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Type", type="smallint", nullable=true)
     */
    private $doType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Domaine", type="smallint", nullable=true)
     */
    private $doDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_Piece", type="string", length=50, nullable=false)
     */
    private $doPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_PieceDoc", type="string", length=50, nullable=false)
     */
    private $doPiecedoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Souche", type="string", length=50, nullable=true)
     */
    private $doSouche;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_Date", type="datetime", nullable=true)
     */
    private $doDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GR_Code", type="string", length=50, nullable=true)
     */
    private $grCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Code", type="string", length=50, nullable=true)
     */
    private $ccCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true)
     */
    private $deCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true)
     */
    private $emCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Commentaires", type="string", length=0, nullable=true)
     */
    private $doCommentaires;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_ARCHIVE", type="smallint", nullable=true)
     */
    private $doArchive = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Valide", type="smallint", nullable=true)
     */
    private $doValide;

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
     * @ORM\Column(name="DO_Statut", type="smallint", nullable=true)
     */
    private $doStatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Justification", type="string", length=0, nullable=true)
     */
    private $doJustification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Demandeur", type="string", length=50, nullable=true)
     */
    private $doDemandeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Transport", type="string", length=50, nullable=true)
     */
    private $rpTransport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMP_Code", type="string", length=50, nullable=true)
     */
    private $empCode;

    public function getDoType(): ?int
    {
        return $this->doType;
    }

    public function setDoType(?int $doType): self
    {
        $this->doType = $doType;

        return $this;
    }

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): self
    {
        $this->doDomaine = $doDomaine;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(string $doPiece): self
    {
        $this->doPiece = $doPiece;

        return $this;
    }

    public function getDoPiecedoc(): ?string
    {
        return $this->doPiecedoc;
    }

    public function setDoPiecedoc(string $doPiecedoc): self
    {
        $this->doPiecedoc = $doPiecedoc;

        return $this;
    }

    public function getDoSouche(): ?string
    {
        return $this->doSouche;
    }

    public function setDoSouche(?string $doSouche): self
    {
        $this->doSouche = $doSouche;

        return $this;
    }

    public function getDoDate(): ?\DateTimeInterface
    {
        return $this->doDate;
    }

    public function setDoDate(?\DateTimeInterface $doDate): self
    {
        $this->doDate = $doDate;

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

    public function getCcCode(): ?string
    {
        return $this->ccCode;
    }

    public function setCcCode(?string $ccCode): self
    {
        $this->ccCode = $ccCode;

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

    public function getEmCode(): ?string
    {
        return $this->emCode;
    }

    public function setEmCode(?string $emCode): self
    {
        $this->emCode = $emCode;

        return $this;
    }

    public function getDoCommentaires(): ?string
    {
        return $this->doCommentaires;
    }

    public function setDoCommentaires(?string $doCommentaires): self
    {
        $this->doCommentaires = $doCommentaires;

        return $this;
    }

    public function getDoArchive(): ?int
    {
        return $this->doArchive;
    }

    public function setDoArchive(?int $doArchive): self
    {
        $this->doArchive = $doArchive;

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

    public function getDoStatut(): ?int
    {
        return $this->doStatut;
    }

    public function setDoStatut(?int $doStatut): self
    {
        $this->doStatut = $doStatut;

        return $this;
    }

    public function getDoJustification(): ?string
    {
        return $this->doJustification;
    }

    public function setDoJustification(?string $doJustification): self
    {
        $this->doJustification = $doJustification;

        return $this;
    }

    public function getDoDemandeur(): ?string
    {
        return $this->doDemandeur;
    }

    public function setDoDemandeur(?string $doDemandeur): self
    {
        $this->doDemandeur = $doDemandeur;

        return $this;
    }

    public function getRpTransport(): ?string
    {
        return $this->rpTransport;
    }

    public function setRpTransport(?string $rpTransport): self
    {
        $this->rpTransport = $rpTransport;

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


}
