<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DDocentete
 *
 * @ORM\Table(name="D_DOCENTETE")
 * @ORM\Entity(repositoryClass="App\Repository\DDocenteteRepository")
 */
class DDocentete
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Domaine", type="smallint", nullable=true)
     */
    private $doDomaine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Type", type="smallint", nullable=true)
     */
    private $doType;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_Piece", type="string", length=50, nullable=false)
     */
    private $doPiece;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Souche", type="string", length=50, nullable=true, options={"default"="N'N° Pièce'"})
     */
    private $doSouche = 'N\'N° Pièce\'';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_Date", type="datetime", nullable=true)
     */
    private $doDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Statut", type="string", length=50, nullable=true)
     */
    private $doStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Nature", type="smallint", nullable=true)
     */
    private $doNature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TotalHT", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTotalht = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TotalNetHT", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTotalnetht;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TotalTTC", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTotalttc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TotalHTDev", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTotalhtdev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TotalNetHTDev", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTotalnethtdev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Tiers", type="string", length=50, nullable=true)
     */
    private $doTiers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CG_Num", type="string", length=50, nullable=true)
     */
    private $cgNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="N_CatCompta", type="smallint", nullable=true)
     */
    private $nCatcompta = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_CatCompta", type="string", length=50, nullable=true)
     */
    private $doCatcompta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GR_Code", type="string", length=50, nullable=true, options={"default"="N'Maintenance'"})
     */
    private $grCode = 'N\'Maintenance\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true)
     */
    private $deCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_CodeDest", type="string", length=50, nullable=true)
     */
    private $deCodedest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMP_Code", type="string", length=100, nullable=true)
     */
    private $empCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceDV", type="string", length=50, nullable=true)
     */
    private $doPiecedv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateDV", type="datetime", nullable=true)
     */
    private $doDatedv;

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
     * @ORM\Column(name="DO_PieceBL", type="string", length=50, nullable=true)
     */
    private $doPiecebl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceFA", type="string", length=50, nullable=true)
     */
    private $doPiecefa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceBAV", type="string", length=50, nullable=true)
     */
    private $doPiecebav;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceBRet", type="string", length=50, nullable=true)
     */
    private $doPiecebret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true)
     */
    private $emCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_NumBL", type="string", length=50, nullable=true)
     */
    private $doNumbl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateBL", type="datetime", nullable=true)
     */
    private $doDatebl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_NumFA", type="string", length=50, nullable=true)
     */
    private $doNumfa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateFA", type="datetime", nullable=true)
     */
    private $doDatefa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeDemandeur", type="string", length=50, nullable=true)
     */
    private $emCodedemandeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeDemarcheur", type="string", length=50, nullable=true)
     */
    private $emCodedemarcheur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeTransporteur", type="string", length=50, nullable=true)
     */
    private $emCodetransporteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Code", type="string", length=50, nullable=true)
     */
    private $rpCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateLivr", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $doDatelivr = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateLivrRealisee", type="datetime", nullable=true)
     */
    private $doDatelivrrealisee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_CondLiv", type="string", length=50, nullable=true)
     */
    private $doCondliv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_NbreColis", type="decimal", precision=18, scale=3, nullable=true)
     */
    private $doNbrecolis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TypeColis", type="string", length=50, nullable=true)
     */
    private $doTypecolis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TauxEscompte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTauxescompte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Ecart", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doEcart = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Valorisation", type="smallint", nullable=true)
     */
    private $doValorisation = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Valide", type="smallint", nullable=true, options={"default"="1"})
     */
    private $doValide = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Print", type="smallint", nullable=true)
     */
    private $doPrint = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Commentaires", type="string", length=0, nullable=true)
     */
    private $doCommentaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Coord01", type="string", length=100, nullable=true)
     */
    private $doCoord01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Coord02", type="string", length=100, nullable=true)
     */
    private $doCoord02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Provenance", type="integer", nullable=true)
     */
    private $doProvenance = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateLivPrev", type="datetime", nullable=true)
     */
    private $doDatelivprev;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Devise", type="smallint", nullable=true)
     */
    private $doDevise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Cours", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doCours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_ModExpo", type="string", length=50, nullable=true)
     */
    private $doModexpo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PoidsBrut", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doPoidsbrut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PoidsNet", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doPoidsnet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_LieuLiv", type="integer", nullable=true)
     */
    private $doLieuliv;

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
     * @ORM\Column(name="DO_TypeRemise", type="integer", nullable=true)
     */
    private $doTyperemise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Remise", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doRemise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_EtatPay", type="smallint", nullable=true)
     */
    private $doEtatpay;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BQ_No", type="integer", nullable=true)
     */
    private $bqNo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="EB_No", type="integer", nullable=true)
     */
    private $ebNo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_ST", type="smallint", nullable=true)
     */
    private $doSt = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Cloture", type="smallint", nullable=true)
     */
    private $doCloture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Coffre", type="smallint", nullable=true)
     */
    private $doCoffre = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_ARCHIVE", type="smallint", nullable=true)
     */
    private $doArchive = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_BCPT", type="smallint", nullable=true)
     */
    private $doBcpt = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="D_Projet", type="string", length=50, nullable=true)
     */
    private $dProjet = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceDA", type="string", length=50, nullable=true)
     */
    private $doPieceda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_PieceOP", type="string", length=50, nullable=true)
     */
    private $doPieceop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Code", type="string", length=50, nullable=true)
     */
    private $ccCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Code", type="string", length=50, nullable=true)
     */
    private $btCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_IndDeb", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doInddeb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_IndFin", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doIndfin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_DiffIndex", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doDiffindex = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_SommeQte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doSommeqte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Perte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doPerte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_TauxEscompteDevise", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doTauxescomptedevise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_EcartDevise", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doEcartdevise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_ValorisationDevise", type="smallint", nullable=true)
     */
    private $doValorisationdevise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Escompte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doEscompte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_No", type="integer", nullable=true)
     */
    private $meNo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MR_No", type="integer", nullable=true)
     */
    private $mrNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_MontantRest", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $doMontantrest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Representant", type="string", length=50, nullable=true)
     */
    private $doRepresentant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Recouvreur", type="string", length=50, nullable=true)
     */
    private $doRecouvreur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Exonoration", type="string", length=50, nullable=true)
     */
    private $doExonoration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateExonoration", type="datetime", nullable=true)
     */
    private $doDateexonoration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_ValiditeExonoration", type="datetime", nullable=true)
     */
    private $doValiditeexonoration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BFPROD", type="string", length=50, nullable=true)
     */
    private $bfprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRODQTEBL", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $prodqtebl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EC_No", type="integer", nullable=true)
     */
    private $ecNo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdWorkflow", type="integer", nullable=true)
     */
    private $idworkflow;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HEURE", type="string", length=50, nullable=true)
     */
    private $heure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CENTRAL", type="string", length=50, nullable=true)
     */
    private $central;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CENTRALISTE", type="string", length=50, nullable=true)
     */
    private $centraliste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="POMPE", type="string", length=50, nullable=true, options={"default"="POMPISTE"})
     */
    private $pompe = 'POMPISTE';

    /**
     * @var string|null
     *
     * @ORM\Column(name="POMPISTE", type="string", length=50, nullable=true)
     */
    private $pompiste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SILOS", type="string", length=50, nullable=true)
     */
    private $silos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeUnitePROD", type="string", length=50, nullable=true, options={"comment"="Code Unité PROD (CENTRAL)"})
     */
    private $rpCodeuniteprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeRespPROD", type="string", length=50, nullable=true, options={"comment"="Code Reponsable PROD(CENTRALISTE)"})
     */
    private $emCoderespprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeTransPROD", type="string", length=50, nullable=true, options={"comment"="Code POMPE "})
     */
    private $rpCodetransprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeTransPROD", type="string", length=50, nullable=true, options={"comment"="Code POMPISTE"})
     */
    private $emCodetransprod;

    public function getDoDomaine(): ?int
    {
        return $this->doDomaine;
    }

    public function setDoDomaine(?int $doDomaine): self
    {
        $this->doDomaine = $doDomaine;

        return $this;
    }

    public function getDoType(): ?int
    {
        return $this->doType;
    }

    public function setDoType(?int $doType): self
    {
        $this->doType = $doType;

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

    public function getDoStatut(): ?string
    {
        return $this->doStatut;
    }

    public function setDoStatut(?string $doStatut): self
    {
        $this->doStatut = $doStatut;

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

    public function getDoTotalht(): ?string
    {
        return $this->doTotalht;
    }

    public function setDoTotalht(?string $doTotalht): self
    {
        $this->doTotalht = $doTotalht;

        return $this;
    }

    public function getDoTotalnetht(): ?string
    {
        return $this->doTotalnetht;
    }

    public function setDoTotalnetht(?string $doTotalnetht): self
    {
        $this->doTotalnetht = $doTotalnetht;

        return $this;
    }

    public function getDoTotalttc(): ?string
    {
        return $this->doTotalttc;
    }

    public function setDoTotalttc(?string $doTotalttc): self
    {
        $this->doTotalttc = $doTotalttc;

        return $this;
    }

    public function getDoTotalhtdev(): ?string
    {
        return $this->doTotalhtdev;
    }

    public function setDoTotalhtdev(?string $doTotalhtdev): self
    {
        $this->doTotalhtdev = $doTotalhtdev;

        return $this;
    }

    public function getDoTotalnethtdev(): ?string
    {
        return $this->doTotalnethtdev;
    }

    public function setDoTotalnethtdev(?string $doTotalnethtdev): self
    {
        $this->doTotalnethtdev = $doTotalnethtdev;

        return $this;
    }

    public function getDoTiers(): ?string
    {
        return $this->doTiers;
    }

    public function setDoTiers(?string $doTiers): self
    {
        $this->doTiers = $doTiers;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(?string $cgNum): self
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getNCatcompta(): ?int
    {
        return $this->nCatcompta;
    }

    public function setNCatcompta(?int $nCatcompta): self
    {
        $this->nCatcompta = $nCatcompta;

        return $this;
    }

    public function getDoCatcompta(): ?string
    {
        return $this->doCatcompta;
    }

    public function setDoCatcompta(?string $doCatcompta): self
    {
        $this->doCatcompta = $doCatcompta;

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

    public function getDeCode(): ?string
    {
        return $this->deCode;
    }

    public function setDeCode(?string $deCode): self
    {
        $this->deCode = $deCode;

        return $this;
    }

    public function getDeCodedest(): ?string
    {
        return $this->deCodedest;
    }

    public function setDeCodedest(?string $deCodedest): self
    {
        $this->deCodedest = $deCodedest;

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

    public function getDoPiecedv(): ?string
    {
        return $this->doPiecedv;
    }

    public function setDoPiecedv(?string $doPiecedv): self
    {
        $this->doPiecedv = $doPiecedv;

        return $this;
    }

    public function getDoDatedv(): ?\DateTimeInterface
    {
        return $this->doDatedv;
    }

    public function setDoDatedv(?\DateTimeInterface $doDatedv): self
    {
        $this->doDatedv = $doDatedv;

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

    public function getDoPiecebl(): ?string
    {
        return $this->doPiecebl;
    }

    public function setDoPiecebl(?string $doPiecebl): self
    {
        $this->doPiecebl = $doPiecebl;

        return $this;
    }

    public function getDoPiecefa(): ?string
    {
        return $this->doPiecefa;
    }

    public function setDoPiecefa(?string $doPiecefa): self
    {
        $this->doPiecefa = $doPiecefa;

        return $this;
    }

    public function getDoPiecebav(): ?string
    {
        return $this->doPiecebav;
    }

    public function setDoPiecebav(?string $doPiecebav): self
    {
        $this->doPiecebav = $doPiecebav;

        return $this;
    }

    public function getDoPiecebret(): ?string
    {
        return $this->doPiecebret;
    }

    public function setDoPiecebret(?string $doPiecebret): self
    {
        $this->doPiecebret = $doPiecebret;

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

    public function getDoNumbl(): ?string
    {
        return $this->doNumbl;
    }

    public function setDoNumbl(?string $doNumbl): self
    {
        $this->doNumbl = $doNumbl;

        return $this;
    }

    public function getDoDatebl(): ?\DateTimeInterface
    {
        return $this->doDatebl;
    }

    public function setDoDatebl(?\DateTimeInterface $doDatebl): self
    {
        $this->doDatebl = $doDatebl;

        return $this;
    }

    public function getDoNumfa(): ?string
    {
        return $this->doNumfa;
    }

    public function setDoNumfa(?string $doNumfa): self
    {
        $this->doNumfa = $doNumfa;

        return $this;
    }

    public function getDoDatefa(): ?\DateTimeInterface
    {
        return $this->doDatefa;
    }

    public function setDoDatefa(?\DateTimeInterface $doDatefa): self
    {
        $this->doDatefa = $doDatefa;

        return $this;
    }

    public function getEmCodedemandeur(): ?string
    {
        return $this->emCodedemandeur;
    }

    public function setEmCodedemandeur(?string $emCodedemandeur): self
    {
        $this->emCodedemandeur = $emCodedemandeur;

        return $this;
    }

    public function getEmCodedemarcheur(): ?string
    {
        return $this->emCodedemarcheur;
    }

    public function setEmCodedemarcheur(?string $emCodedemarcheur): self
    {
        $this->emCodedemarcheur = $emCodedemarcheur;

        return $this;
    }

    public function getEmCodetransporteur(): ?string
    {
        return $this->emCodetransporteur;
    }

    public function setEmCodetransporteur(?string $emCodetransporteur): self
    {
        $this->emCodetransporteur = $emCodetransporteur;

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

    public function getDoDatelivr(): ?\DateTimeInterface
    {
        return $this->doDatelivr;
    }

    public function setDoDatelivr(?\DateTimeInterface $doDatelivr): self
    {
        $this->doDatelivr = $doDatelivr;

        return $this;
    }

    public function getDoDatelivrrealisee(): ?\DateTimeInterface
    {
        return $this->doDatelivrrealisee;
    }

    public function setDoDatelivrrealisee(?\DateTimeInterface $doDatelivrrealisee): self
    {
        $this->doDatelivrrealisee = $doDatelivrrealisee;

        return $this;
    }

    public function getDoCondliv(): ?string
    {
        return $this->doCondliv;
    }

    public function setDoCondliv(?string $doCondliv): self
    {
        $this->doCondliv = $doCondliv;

        return $this;
    }

    public function getDoNbrecolis(): ?string
    {
        return $this->doNbrecolis;
    }

    public function setDoNbrecolis(?string $doNbrecolis): self
    {
        $this->doNbrecolis = $doNbrecolis;

        return $this;
    }

    public function getDoTypecolis(): ?string
    {
        return $this->doTypecolis;
    }

    public function setDoTypecolis(?string $doTypecolis): self
    {
        $this->doTypecolis = $doTypecolis;

        return $this;
    }

    public function getDoTauxescompte(): ?string
    {
        return $this->doTauxescompte;
    }

    public function setDoTauxescompte(?string $doTauxescompte): self
    {
        $this->doTauxescompte = $doTauxescompte;

        return $this;
    }

    public function getDoEcart(): ?string
    {
        return $this->doEcart;
    }

    public function setDoEcart(?string $doEcart): self
    {
        $this->doEcart = $doEcart;

        return $this;
    }

    public function getDoValorisation(): ?int
    {
        return $this->doValorisation;
    }

    public function setDoValorisation(?int $doValorisation): self
    {
        $this->doValorisation = $doValorisation;

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

    public function getDoPrint(): ?int
    {
        return $this->doPrint;
    }

    public function setDoPrint(?int $doPrint): self
    {
        $this->doPrint = $doPrint;

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

    public function getDoCoord01(): ?string
    {
        return $this->doCoord01;
    }

    public function setDoCoord01(?string $doCoord01): self
    {
        $this->doCoord01 = $doCoord01;

        return $this;
    }

    public function getDoCoord02(): ?string
    {
        return $this->doCoord02;
    }

    public function setDoCoord02(?string $doCoord02): self
    {
        $this->doCoord02 = $doCoord02;

        return $this;
    }

    public function getDoProvenance(): ?int
    {
        return $this->doProvenance;
    }

    public function setDoProvenance(?int $doProvenance): self
    {
        $this->doProvenance = $doProvenance;

        return $this;
    }

    public function getDoDatelivprev(): ?\DateTimeInterface
    {
        return $this->doDatelivprev;
    }

    public function setDoDatelivprev(?\DateTimeInterface $doDatelivprev): self
    {
        $this->doDatelivprev = $doDatelivprev;

        return $this;
    }

    public function getDoDevise(): ?int
    {
        return $this->doDevise;
    }

    public function setDoDevise(?int $doDevise): self
    {
        $this->doDevise = $doDevise;

        return $this;
    }

    public function getDoCours(): ?string
    {
        return $this->doCours;
    }

    public function setDoCours(?string $doCours): self
    {
        $this->doCours = $doCours;

        return $this;
    }

    public function getDoModexpo(): ?string
    {
        return $this->doModexpo;
    }

    public function setDoModexpo(?string $doModexpo): self
    {
        $this->doModexpo = $doModexpo;

        return $this;
    }

    public function getDoPoidsbrut(): ?string
    {
        return $this->doPoidsbrut;
    }

    public function setDoPoidsbrut(?string $doPoidsbrut): self
    {
        $this->doPoidsbrut = $doPoidsbrut;

        return $this;
    }

    public function getDoPoidsnet(): ?string
    {
        return $this->doPoidsnet;
    }

    public function setDoPoidsnet(?string $doPoidsnet): self
    {
        $this->doPoidsnet = $doPoidsnet;

        return $this;
    }

    public function getDoLieuliv(): ?int
    {
        return $this->doLieuliv;
    }

    public function setDoLieuliv(?int $doLieuliv): self
    {
        $this->doLieuliv = $doLieuliv;

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

    public function getDoTyperemise(): ?int
    {
        return $this->doTyperemise;
    }

    public function setDoTyperemise(?int $doTyperemise): self
    {
        $this->doTyperemise = $doTyperemise;

        return $this;
    }

    public function getDoRemise(): ?string
    {
        return $this->doRemise;
    }

    public function setDoRemise(?string $doRemise): self
    {
        $this->doRemise = $doRemise;

        return $this;
    }

    public function getDoEtatpay(): ?int
    {
        return $this->doEtatpay;
    }

    public function setDoEtatpay(?int $doEtatpay): self
    {
        $this->doEtatpay = $doEtatpay;

        return $this;
    }

    public function getBqNo(): ?int
    {
        return $this->bqNo;
    }

    public function setBqNo(?int $bqNo): self
    {
        $this->bqNo = $bqNo;

        return $this;
    }

    public function getEbNo(): ?int
    {
        return $this->ebNo;
    }

    public function setEbNo(?int $ebNo): self
    {
        $this->ebNo = $ebNo;

        return $this;
    }

    public function getDoSt(): ?int
    {
        return $this->doSt;
    }

    public function setDoSt(?int $doSt): self
    {
        $this->doSt = $doSt;

        return $this;
    }

    public function getDoCloture(): ?int
    {
        return $this->doCloture;
    }

    public function setDoCloture(?int $doCloture): self
    {
        $this->doCloture = $doCloture;

        return $this;
    }

    public function getDoCoffre(): ?int
    {
        return $this->doCoffre;
    }

    public function setDoCoffre(?int $doCoffre): self
    {
        $this->doCoffre = $doCoffre;

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

    public function getDoBcpt(): ?int
    {
        return $this->doBcpt;
    }

    public function setDoBcpt(?int $doBcpt): self
    {
        $this->doBcpt = $doBcpt;

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

    public function getDoPieceda(): ?string
    {
        return $this->doPieceda;
    }

    public function setDoPieceda(?string $doPieceda): self
    {
        $this->doPieceda = $doPieceda;

        return $this;
    }

    public function getDoPieceop(): ?string
    {
        return $this->doPieceop;
    }

    public function setDoPieceop(?string $doPieceop): self
    {
        $this->doPieceop = $doPieceop;

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

    public function getBtCode(): ?string
    {
        return $this->btCode;
    }

    public function setBtCode(?string $btCode): self
    {
        $this->btCode = $btCode;

        return $this;
    }

    public function getDoInddeb(): ?string
    {
        return $this->doInddeb;
    }

    public function setDoInddeb(?string $doInddeb): self
    {
        $this->doInddeb = $doInddeb;

        return $this;
    }

    public function getDoIndfin(): ?string
    {
        return $this->doIndfin;
    }

    public function setDoIndfin(?string $doIndfin): self
    {
        $this->doIndfin = $doIndfin;

        return $this;
    }

    public function getDoDiffindex(): ?string
    {
        return $this->doDiffindex;
    }

    public function setDoDiffindex(?string $doDiffindex): self
    {
        $this->doDiffindex = $doDiffindex;

        return $this;
    }

    public function getDoSommeqte(): ?string
    {
        return $this->doSommeqte;
    }

    public function setDoSommeqte(?string $doSommeqte): self
    {
        $this->doSommeqte = $doSommeqte;

        return $this;
    }

    public function getDoPerte(): ?string
    {
        return $this->doPerte;
    }

    public function setDoPerte(?string $doPerte): self
    {
        $this->doPerte = $doPerte;

        return $this;
    }

    public function getDoTauxescomptedevise(): ?string
    {
        return $this->doTauxescomptedevise;
    }

    public function setDoTauxescomptedevise(?string $doTauxescomptedevise): self
    {
        $this->doTauxescomptedevise = $doTauxescomptedevise;

        return $this;
    }

    public function getDoEcartdevise(): ?string
    {
        return $this->doEcartdevise;
    }

    public function setDoEcartdevise(?string $doEcartdevise): self
    {
        $this->doEcartdevise = $doEcartdevise;

        return $this;
    }

    public function getDoValorisationdevise(): ?int
    {
        return $this->doValorisationdevise;
    }

    public function setDoValorisationdevise(?int $doValorisationdevise): self
    {
        $this->doValorisationdevise = $doValorisationdevise;

        return $this;
    }

    public function getDoEscompte(): ?string
    {
        return $this->doEscompte;
    }

    public function setDoEscompte(?string $doEscompte): self
    {
        $this->doEscompte = $doEscompte;

        return $this;
    }

    public function getMeNo(): ?int
    {
        return $this->meNo;
    }

    public function setMeNo(?int $meNo): self
    {
        $this->meNo = $meNo;

        return $this;
    }

    public function getMrNo(): ?int
    {
        return $this->mrNo;
    }

    public function setMrNo(?int $mrNo): self
    {
        $this->mrNo = $mrNo;

        return $this;
    }

    public function getDoMontantrest(): ?string
    {
        return $this->doMontantrest;
    }

    public function setDoMontantrest(?string $doMontantrest): self
    {
        $this->doMontantrest = $doMontantrest;

        return $this;
    }

    public function getDoRepresentant(): ?string
    {
        return $this->doRepresentant;
    }

    public function setDoRepresentant(?string $doRepresentant): self
    {
        $this->doRepresentant = $doRepresentant;

        return $this;
    }

    public function getDoRecouvreur(): ?string
    {
        return $this->doRecouvreur;
    }

    public function setDoRecouvreur(?string $doRecouvreur): self
    {
        $this->doRecouvreur = $doRecouvreur;

        return $this;
    }

    public function getDoExonoration(): ?string
    {
        return $this->doExonoration;
    }

    public function setDoExonoration(?string $doExonoration): self
    {
        $this->doExonoration = $doExonoration;

        return $this;
    }

    public function getDoDateexonoration(): ?\DateTimeInterface
    {
        return $this->doDateexonoration;
    }

    public function setDoDateexonoration(?\DateTimeInterface $doDateexonoration): self
    {
        $this->doDateexonoration = $doDateexonoration;

        return $this;
    }

    public function getDoValiditeexonoration(): ?\DateTimeInterface
    {
        return $this->doValiditeexonoration;
    }

    public function setDoValiditeexonoration(?\DateTimeInterface $doValiditeexonoration): self
    {
        $this->doValiditeexonoration = $doValiditeexonoration;

        return $this;
    }

    public function getBfprod(): ?string
    {
        return $this->bfprod;
    }

    public function setBfprod(?string $bfprod): self
    {
        $this->bfprod = $bfprod;

        return $this;
    }

    public function getProdqtebl(): ?string
    {
        return $this->prodqtebl;
    }

    public function setProdqtebl(?string $prodqtebl): self
    {
        $this->prodqtebl = $prodqtebl;

        return $this;
    }

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(?int $ecNo): self
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getIdworkflow(): ?int
    {
        return $this->idworkflow;
    }

    public function setIdworkflow(?int $idworkflow): self
    {
        $this->idworkflow = $idworkflow;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getCentral(): ?string
    {
        return $this->central;
    }

    public function setCentral(?string $central): self
    {
        $this->central = $central;

        return $this;
    }

    public function getCentraliste(): ?string
    {
        return $this->centraliste;
    }

    public function setCentraliste(?string $centraliste): self
    {
        $this->centraliste = $centraliste;

        return $this;
    }

    public function getPompe(): ?string
    {
        return $this->pompe;
    }

    public function setPompe(?string $pompe): self
    {
        $this->pompe = $pompe;

        return $this;
    }

    public function getPompiste(): ?string
    {
        return $this->pompiste;
    }

    public function setPompiste(?string $pompiste): self
    {
        $this->pompiste = $pompiste;

        return $this;
    }

    public function getSilos(): ?string
    {
        return $this->silos;
    }

    public function setSilos(?string $silos): self
    {
        $this->silos = $silos;

        return $this;
    }

    public function getRpCodeuniteprod(): ?string
    {
        return $this->rpCodeuniteprod;
    }

    public function setRpCodeuniteprod(?string $rpCodeuniteprod): self
    {
        $this->rpCodeuniteprod = $rpCodeuniteprod;

        return $this;
    }

    public function getEmCoderespprod(): ?string
    {
        return $this->emCoderespprod;
    }

    public function setEmCoderespprod(?string $emCoderespprod): self
    {
        $this->emCoderespprod = $emCoderespprod;

        return $this;
    }

    public function getRpCodetransprod(): ?string
    {
        return $this->rpCodetransprod;
    }

    public function setRpCodetransprod(?string $rpCodetransprod): self
    {
        $this->rpCodetransprod = $rpCodetransprod;

        return $this;
    }

    public function getEmCodetransprod(): ?string
    {
        return $this->emCodetransprod;
    }

    public function setEmCodetransprod(?string $emCodetransprod): self
    {
        $this->emCodetransprod = $emCodetransprod;

        return $this;
    }

  


}
