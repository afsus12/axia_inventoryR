<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DDocligne
 *
 * @ORM\Table(name="D_DOCLIGNE")
 * @ORM\Entity(repositoryClass="App\Repository\DDocligneRepository")
 */
class DDocligne
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
     * @var string|null
     *
     * @ORM\Column(name="DO_Souche", type="string", length=50, nullable=true)
     */
    private $doSouche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Piece", type="string", length=50, nullable=true)
     */
    private $doPiece;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_Date", type="datetime", nullable=true)
     */
    private $doDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CT_Num", type="string", length=50, nullable=true)
     */
    private $ctNum;

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
     * @ORM\Column(name="DL_PieceDV", type="string", length=50, nullable=true)
     */
    private $dlPiecedv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceDV", type="datetime", nullable=true)
     */
    private $dlDatepiecedv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_DV", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteDv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceDA", type="string", length=50, nullable=true)
     */
    private $dlPieceda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceDA", type="datetime", nullable=true)
     */
    private $dlDatepieceda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_DA", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteDa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceOP", type="string", length=50, nullable=true)
     */
    private $dlPieceop;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceOP", type="datetime", nullable=true)
     */
    private $dlDatepieceop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_OP", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteOp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceBC", type="string", length=50, nullable=true)
     */
    private $dlPiecebc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceBC", type="datetime", nullable=true)
     */
    private $dlDatepiecebc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_BC", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteBc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceBL", type="string", length=50, nullable=true)
     */
    private $dlPiecebl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceBL", type="datetime", nullable=true)
     */
    private $dlDatepiecebl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_BL", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteBl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceBAV", type="string", length=50, nullable=true)
     */
    private $dlPiecebav;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceBAV", type="datetime", nullable=true)
     */
    private $dlDatepiecebav;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_BAV", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteBav;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceBRet", type="string", length=50, nullable=true)
     */
    private $dlPiecebret;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceBRet", type="datetime", nullable=true)
     */
    private $dlDatepiecebret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_BRet", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteBret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceBP", type="string", length=50, nullable=true)
     */
    private $dlPiecebp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceBP", type="datetime", nullable=true)
     */
    private $dlDatepiecebp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_BP", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteBp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceFA", type="string", length=50, nullable=true)
     */
    private $dlPiecefa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceFA", type="datetime", nullable=true)
     */
    private $dlDatepiecefa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_FA", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteFa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceFAA", type="string", length=50, nullable=true)
     */
    private $dlPiecefaa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceFAA", type="datetime", nullable=true)
     */
    private $dlDatepiecefaa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_FAA", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteFaa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceFAR", type="string", length=50, nullable=true)
     */
    private $dlPiecefar;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceFAR", type="datetime", nullable=true)
     */
    private $dlDatepiecefar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_FAR", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteFar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PieceCR", type="string", length=50, nullable=true)
     */
    private $dlPiececr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DL_DatePieceCR", type="datetime", nullable=true)
     */
    private $dlDatepiececr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte_CR", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteCr;

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
     * @ORM\Column(name="DL_QteDepot", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQtedepot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_QteSto", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQtesto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Ref", type="string", length=50, nullable=true)
     */
    private $arRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Design", type="string", length=0, nullable=true)
     */
    private $dlDesign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Unite", type="string", length=50, nullable=true)
     */
    private $dlUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_RefComp", type="string", length=50, nullable=true)
     */
    private $arRefcomp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PoidNet", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPoidnet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PoidBrut", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPoidbrut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Hauteur", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlHauteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Longueur", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlLongueur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Largeur", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlLargeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_NombreArt", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlNombreart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Qte", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_QteRes", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PrixUnitaire", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPrixunitaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PrixUnitaireDev", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPrixunitairedev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Remise", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlRemise = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Remise_2", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlRemise2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Remise_3", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlRemise3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PUNetHT", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPunetht;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PUNetHTDev", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPunethtdev;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DL_TTC", type="smallint", nullable=true)
     */
    private $dlTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_PUTTC", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlPuttc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_MontantHT", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlMontantht = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_MontantHTNet", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlMontanthtnet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_MontantTTC", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlMontantttc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DL_MvtStock", type="smallint", nullable=true)
     */
    private $dlMvtstock;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DL_Solde", type="boolean", nullable=true)
     */
    private $dlSolde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_CodeTaxe1", type="string", length=25, nullable=true)
     */
    private $dlCodetaxe1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Taxe1", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlTaxe1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_CodeTaxe2", type="string", length=25, nullable=true)
     */
    private $dlCodetaxe2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Taxe2", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlTaxe2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_CodeTaxe3", type="string", length=25, nullable=true)
     */
    private $dlCodetaxe3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Taxe3", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlTaxe3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_CMUP", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlCmup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AF_RefFourniss", type="string", length=50, nullable=true)
     */
    private $afReffourniss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_Num", type="string", length=50, nullable=true)
     */
    private $caNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DL_Valorise", type="smallint", nullable=true)
     */
    private $dlValorise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DL_Escompte", type="smallint", nullable=true)
     */
    private $dlEscompte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EG_Enumere1", type="string", length=100, nullable=true)
     */
    private $egEnumere1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EG_Enumere2", type="string", length=100, nullable=true)
     */
    private $egEnumere2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="AE_Commentaire", type="string", length=300, nullable=true)
     */
    private $aeCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AG_CodeBarre", type="string", length=50, nullable=true)
     */
    private $agCodebarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AG_Ref", type="string", length=50, nullable=true)
     */
    private $agRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true)
     */
    private $emCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_DesignGamme", type="string", length=500, nullable=true)
     */
    private $dlDesigngamme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_RefOrig", type="string", length=50, nullable=true)
     */
    private $dlReforig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Description", type="string", length=0, nullable=true)
     */
    private $dlDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_QteParColis", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlQteparcolis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_NbreColis", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlNbrecolis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_TypeColis", type="string", length=50, nullable=true)
     */
    private $dlTypecolis = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cbMarqArtComp", type="integer", nullable=true)
     */
    private $cbmarqartcomp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cbMarqCR", type="integer", nullable=true)
     */
    private $cbmarqcr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cbMarqArt", type="integer", nullable=true)
     */
    private $cbmarqart;

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
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true, options={"default"="N'CSQL'"})
     */
    private $cbcreateur = 'N\'CSQL\'';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

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
     * @ORM\Column(name="D_Projet", type="string", length=50, nullable=true)
     */
    private $dProjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Code", type="string", length=50, nullable=true)
     */
    private $btCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_UtilisationAct", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlUtilisationact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Utilisation", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $dlUtilisation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Avenant", type="smallint", nullable=true)
     */
    private $doAvenant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_DV", type="string", length=50, nullable=true)
     */
    private $coDv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_BC", type="string", length=50, nullable=true)
     */
    private $coBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_BP", type="string", length=50, nullable=true)
     */
    private $coBp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_BL", type="string", length=50, nullable=true)
     */
    private $coBl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_FA", type="string", length=50, nullable=true)
     */
    private $coFa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_BR", type="string", length=50, nullable=true)
     */
    private $coBr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_BA", type="string", length=50, nullable=true)
     */
    private $coBa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_FAR", type="string", length=50, nullable=true)
     */
    private $coFar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_FAA", type="string", length=50, nullable=true)
     */
    private $coFaa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme1", type="string", length=50, nullable=true)
     */
    private $gamme1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme2", type="string", length=50, nullable=true)
     */
    private $gamme2 = '';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="DO_DateLivr", type="datetime", nullable=true)
     */
    private $doDatelivr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DL_No", type="integer", nullable=true)
     */
    private $dlNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LS_NoSerie", type="string", length=50, nullable=true)
     */
    private $lsNoserie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CG_Num", type="string", length=50, nullable=true)
     */
    private $cgNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_KiloAct", type="decimal", precision=26, scale=4, nullable=true)
     */
    private $dlKiloact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Kilometrage", type="decimal", precision=26, scale=4, nullable=true)
     */
    private $dlKilometrage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_Zone", type="string", length=50, nullable=true)
     */
    private $dlZone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeTransporteur", type="string", length=50, nullable=true)
     */
    private $emCodetransporteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_ModExpo", type="string", length=50, nullable=true)
     */
    private $doModexpo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRODQTEBL", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $prodqtebl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DL_TNomencl", type="smallint", nullable=true)
     */
    private $dlTnomencl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_CodeFormule", type="string", length=50, nullable=true)
     */
    private $dlCodeformule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DL_NatureFormule", type="string", length=50, nullable=true)
     */
    private $dlNatureformule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HEURE", type="string", length=50, nullable=true)
     */
    private $heure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="POMPE", type="string", length=50, nullable=true)
     */
    private $pompe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="POMPISTE", type="string", length=50, nullable=true)
     */
    private $pompiste;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QteLeveeTech", type="integer", nullable=true)
     */
    private $qteleveetech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumeroFicheTech", type="string", length=50, nullable=true)
     */
    private $numerofichetech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PAIEMENT COMPL", type="string", length=50, nullable=true)
     */
    private $paiementCompl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="A RECEVOIR", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $aRecevoir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateVisitTech", type="datetime", nullable=true)
     */
    private $datevisittech;

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

    public function getDoSouche(): ?string
    {
        return $this->doSouche;
    }

    public function setDoSouche(?string $doSouche): self
    {
        $this->doSouche = $doSouche;

        return $this;
    }

    public function getDoPiece(): ?string
    {
        return $this->doPiece;
    }

    public function setDoPiece(?string $doPiece): self
    {
        $this->doPiece = $doPiece;

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

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): self
    {
        $this->ctNum = $ctNum;

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

    public function getDlPiecedv(): ?string
    {
        return $this->dlPiecedv;
    }

    public function setDlPiecedv(?string $dlPiecedv): self
    {
        $this->dlPiecedv = $dlPiecedv;

        return $this;
    }

    public function getDlDatepiecedv(): ?\DateTimeInterface
    {
        return $this->dlDatepiecedv;
    }

    public function setDlDatepiecedv(?\DateTimeInterface $dlDatepiecedv): self
    {
        $this->dlDatepiecedv = $dlDatepiecedv;

        return $this;
    }

    public function getDlQteDv(): ?string
    {
        return $this->dlQteDv;
    }

    public function setDlQteDv(?string $dlQteDv): self
    {
        $this->dlQteDv = $dlQteDv;

        return $this;
    }

    public function getDlPieceda(): ?string
    {
        return $this->dlPieceda;
    }

    public function setDlPieceda(?string $dlPieceda): self
    {
        $this->dlPieceda = $dlPieceda;

        return $this;
    }

    public function getDlDatepieceda(): ?\DateTimeInterface
    {
        return $this->dlDatepieceda;
    }

    public function setDlDatepieceda(?\DateTimeInterface $dlDatepieceda): self
    {
        $this->dlDatepieceda = $dlDatepieceda;

        return $this;
    }

    public function getDlQteDa(): ?string
    {
        return $this->dlQteDa;
    }

    public function setDlQteDa(?string $dlQteDa): self
    {
        $this->dlQteDa = $dlQteDa;

        return $this;
    }

    public function getDlPieceop(): ?string
    {
        return $this->dlPieceop;
    }

    public function setDlPieceop(?string $dlPieceop): self
    {
        $this->dlPieceop = $dlPieceop;

        return $this;
    }

    public function getDlDatepieceop(): ?\DateTimeInterface
    {
        return $this->dlDatepieceop;
    }

    public function setDlDatepieceop(?\DateTimeInterface $dlDatepieceop): self
    {
        $this->dlDatepieceop = $dlDatepieceop;

        return $this;
    }

    public function getDlQteOp(): ?string
    {
        return $this->dlQteOp;
    }

    public function setDlQteOp(?string $dlQteOp): self
    {
        $this->dlQteOp = $dlQteOp;

        return $this;
    }

    public function getDlPiecebc(): ?string
    {
        return $this->dlPiecebc;
    }

    public function setDlPiecebc(?string $dlPiecebc): self
    {
        $this->dlPiecebc = $dlPiecebc;

        return $this;
    }

    public function getDlDatepiecebc(): ?\DateTimeInterface
    {
        return $this->dlDatepiecebc;
    }

    public function setDlDatepiecebc(?\DateTimeInterface $dlDatepiecebc): self
    {
        $this->dlDatepiecebc = $dlDatepiecebc;

        return $this;
    }

    public function getDlQteBc(): ?string
    {
        return $this->dlQteBc;
    }

    public function setDlQteBc(?string $dlQteBc): self
    {
        $this->dlQteBc = $dlQteBc;

        return $this;
    }

    public function getDlPiecebl(): ?string
    {
        return $this->dlPiecebl;
    }

    public function setDlPiecebl(?string $dlPiecebl): self
    {
        $this->dlPiecebl = $dlPiecebl;

        return $this;
    }

    public function getDlDatepiecebl(): ?\DateTimeInterface
    {
        return $this->dlDatepiecebl;
    }

    public function setDlDatepiecebl(?\DateTimeInterface $dlDatepiecebl): self
    {
        $this->dlDatepiecebl = $dlDatepiecebl;

        return $this;
    }

    public function getDlQteBl(): ?string
    {
        return $this->dlQteBl;
    }

    public function setDlQteBl(?string $dlQteBl): self
    {
        $this->dlQteBl = $dlQteBl;

        return $this;
    }

    public function getDlPiecebav(): ?string
    {
        return $this->dlPiecebav;
    }

    public function setDlPiecebav(?string $dlPiecebav): self
    {
        $this->dlPiecebav = $dlPiecebav;

        return $this;
    }

    public function getDlDatepiecebav(): ?\DateTimeInterface
    {
        return $this->dlDatepiecebav;
    }

    public function setDlDatepiecebav(?\DateTimeInterface $dlDatepiecebav): self
    {
        $this->dlDatepiecebav = $dlDatepiecebav;

        return $this;
    }

    public function getDlQteBav(): ?string
    {
        return $this->dlQteBav;
    }

    public function setDlQteBav(?string $dlQteBav): self
    {
        $this->dlQteBav = $dlQteBav;

        return $this;
    }

    public function getDlPiecebret(): ?string
    {
        return $this->dlPiecebret;
    }

    public function setDlPiecebret(?string $dlPiecebret): self
    {
        $this->dlPiecebret = $dlPiecebret;

        return $this;
    }

    public function getDlDatepiecebret(): ?\DateTimeInterface
    {
        return $this->dlDatepiecebret;
    }

    public function setDlDatepiecebret(?\DateTimeInterface $dlDatepiecebret): self
    {
        $this->dlDatepiecebret = $dlDatepiecebret;

        return $this;
    }

    public function getDlQteBret(): ?string
    {
        return $this->dlQteBret;
    }

    public function setDlQteBret(?string $dlQteBret): self
    {
        $this->dlQteBret = $dlQteBret;

        return $this;
    }

    public function getDlPiecebp(): ?string
    {
        return $this->dlPiecebp;
    }

    public function setDlPiecebp(?string $dlPiecebp): self
    {
        $this->dlPiecebp = $dlPiecebp;

        return $this;
    }

    public function getDlDatepiecebp(): ?\DateTimeInterface
    {
        return $this->dlDatepiecebp;
    }

    public function setDlDatepiecebp(?\DateTimeInterface $dlDatepiecebp): self
    {
        $this->dlDatepiecebp = $dlDatepiecebp;

        return $this;
    }

    public function getDlQteBp(): ?string
    {
        return $this->dlQteBp;
    }

    public function setDlQteBp(?string $dlQteBp): self
    {
        $this->dlQteBp = $dlQteBp;

        return $this;
    }

    public function getDlPiecefa(): ?string
    {
        return $this->dlPiecefa;
    }

    public function setDlPiecefa(?string $dlPiecefa): self
    {
        $this->dlPiecefa = $dlPiecefa;

        return $this;
    }

    public function getDlDatepiecefa(): ?\DateTimeInterface
    {
        return $this->dlDatepiecefa;
    }

    public function setDlDatepiecefa(?\DateTimeInterface $dlDatepiecefa): self
    {
        $this->dlDatepiecefa = $dlDatepiecefa;

        return $this;
    }

    public function getDlQteFa(): ?string
    {
        return $this->dlQteFa;
    }

    public function setDlQteFa(?string $dlQteFa): self
    {
        $this->dlQteFa = $dlQteFa;

        return $this;
    }

    public function getDlPiecefaa(): ?string
    {
        return $this->dlPiecefaa;
    }

    public function setDlPiecefaa(?string $dlPiecefaa): self
    {
        $this->dlPiecefaa = $dlPiecefaa;

        return $this;
    }

    public function getDlDatepiecefaa(): ?\DateTimeInterface
    {
        return $this->dlDatepiecefaa;
    }

    public function setDlDatepiecefaa(?\DateTimeInterface $dlDatepiecefaa): self
    {
        $this->dlDatepiecefaa = $dlDatepiecefaa;

        return $this;
    }

    public function getDlQteFaa(): ?string
    {
        return $this->dlQteFaa;
    }

    public function setDlQteFaa(?string $dlQteFaa): self
    {
        $this->dlQteFaa = $dlQteFaa;

        return $this;
    }

    public function getDlPiecefar(): ?string
    {
        return $this->dlPiecefar;
    }

    public function setDlPiecefar(?string $dlPiecefar): self
    {
        $this->dlPiecefar = $dlPiecefar;

        return $this;
    }

    public function getDlDatepiecefar(): ?\DateTimeInterface
    {
        return $this->dlDatepiecefar;
    }

    public function setDlDatepiecefar(?\DateTimeInterface $dlDatepiecefar): self
    {
        $this->dlDatepiecefar = $dlDatepiecefar;

        return $this;
    }

    public function getDlQteFar(): ?string
    {
        return $this->dlQteFar;
    }

    public function setDlQteFar(?string $dlQteFar): self
    {
        $this->dlQteFar = $dlQteFar;

        return $this;
    }

    public function getDlPiececr(): ?string
    {
        return $this->dlPiececr;
    }

    public function setDlPiececr(?string $dlPiececr): self
    {
        $this->dlPiececr = $dlPiececr;

        return $this;
    }

    public function getDlDatepiececr(): ?\DateTimeInterface
    {
        return $this->dlDatepiececr;
    }

    public function setDlDatepiececr(?\DateTimeInterface $dlDatepiececr): self
    {
        $this->dlDatepiececr = $dlDatepiececr;

        return $this;
    }

    public function getDlQteCr(): ?string
    {
        return $this->dlQteCr;
    }

    public function setDlQteCr(?string $dlQteCr): self
    {
        $this->dlQteCr = $dlQteCr;

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

    public function getDlQtedepot(): ?string
    {
        return $this->dlQtedepot;
    }

    public function setDlQtedepot(?string $dlQtedepot): self
    {
        $this->dlQtedepot = $dlQtedepot;

        return $this;
    }

    public function getDlQtesto(): ?string
    {
        return $this->dlQtesto;
    }

    public function setDlQtesto(?string $dlQtesto): self
    {
        $this->dlQtesto = $dlQtesto;

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

    public function getDlDesign(): ?string
    {
        return $this->dlDesign;
    }

    public function setDlDesign(?string $dlDesign): self
    {
        $this->dlDesign = $dlDesign;

        return $this;
    }

    public function getDlUnite(): ?string
    {
        return $this->dlUnite;
    }

    public function setDlUnite(?string $dlUnite): self
    {
        $this->dlUnite = $dlUnite;

        return $this;
    }

    public function getArRefcomp(): ?string
    {
        return $this->arRefcomp;
    }

    public function setArRefcomp(?string $arRefcomp): self
    {
        $this->arRefcomp = $arRefcomp;

        return $this;
    }

    public function getDlPoidnet(): ?string
    {
        return $this->dlPoidnet;
    }

    public function setDlPoidnet(?string $dlPoidnet): self
    {
        $this->dlPoidnet = $dlPoidnet;

        return $this;
    }

    public function getDlPoidbrut(): ?string
    {
        return $this->dlPoidbrut;
    }

    public function setDlPoidbrut(?string $dlPoidbrut): self
    {
        $this->dlPoidbrut = $dlPoidbrut;

        return $this;
    }

    public function getDlHauteur(): ?string
    {
        return $this->dlHauteur;
    }

    public function setDlHauteur(?string $dlHauteur): self
    {
        $this->dlHauteur = $dlHauteur;

        return $this;
    }

    public function getDlLongueur(): ?string
    {
        return $this->dlLongueur;
    }

    public function setDlLongueur(?string $dlLongueur): self
    {
        $this->dlLongueur = $dlLongueur;

        return $this;
    }

    public function getDlLargeur(): ?string
    {
        return $this->dlLargeur;
    }

    public function setDlLargeur(?string $dlLargeur): self
    {
        $this->dlLargeur = $dlLargeur;

        return $this;
    }

    public function getDlNombreart(): ?string
    {
        return $this->dlNombreart;
    }

    public function setDlNombreart(?string $dlNombreart): self
    {
        $this->dlNombreart = $dlNombreart;

        return $this;
    }

    public function getDlQte(): ?string
    {
        return $this->dlQte;
    }

    public function setDlQte(?string $dlQte): self
    {
        $this->dlQte = $dlQte;

        return $this;
    }

    public function getDlQteres(): ?string
    {
        return $this->dlQteres;
    }

    public function setDlQteres(?string $dlQteres): self
    {
        $this->dlQteres = $dlQteres;

        return $this;
    }

    public function getDlPrixunitaire(): ?string
    {
        return $this->dlPrixunitaire;
    }

    public function setDlPrixunitaire(?string $dlPrixunitaire): self
    {
        $this->dlPrixunitaire = $dlPrixunitaire;

        return $this;
    }

    public function getDlPrixunitairedev(): ?string
    {
        return $this->dlPrixunitairedev;
    }

    public function setDlPrixunitairedev(?string $dlPrixunitairedev): self
    {
        $this->dlPrixunitairedev = $dlPrixunitairedev;

        return $this;
    }

    public function getDlRemise(): ?string
    {
        return $this->dlRemise;
    }

    public function setDlRemise(?string $dlRemise): self
    {
        $this->dlRemise = $dlRemise;

        return $this;
    }

    public function getDlRemise2(): ?string
    {
        return $this->dlRemise2;
    }

    public function setDlRemise2(?string $dlRemise2): self
    {
        $this->dlRemise2 = $dlRemise2;

        return $this;
    }

    public function getDlRemise3(): ?string
    {
        return $this->dlRemise3;
    }

    public function setDlRemise3(?string $dlRemise3): self
    {
        $this->dlRemise3 = $dlRemise3;

        return $this;
    }

    public function getDlPunetht(): ?string
    {
        return $this->dlPunetht;
    }

    public function setDlPunetht(?string $dlPunetht): self
    {
        $this->dlPunetht = $dlPunetht;

        return $this;
    }

    public function getDlPunethtdev(): ?string
    {
        return $this->dlPunethtdev;
    }

    public function setDlPunethtdev(?string $dlPunethtdev): self
    {
        $this->dlPunethtdev = $dlPunethtdev;

        return $this;
    }

    public function getDlTtc(): ?int
    {
        return $this->dlTtc;
    }

    public function setDlTtc(?int $dlTtc): self
    {
        $this->dlTtc = $dlTtc;

        return $this;
    }

    public function getDlPuttc(): ?string
    {
        return $this->dlPuttc;
    }

    public function setDlPuttc(?string $dlPuttc): self
    {
        $this->dlPuttc = $dlPuttc;

        return $this;
    }

    public function getDlMontantht(): ?string
    {
        return $this->dlMontantht;
    }

    public function setDlMontantht(?string $dlMontantht): self
    {
        $this->dlMontantht = $dlMontantht;

        return $this;
    }

    public function getDlMontanthtnet(): ?string
    {
        return $this->dlMontanthtnet;
    }

    public function setDlMontanthtnet(?string $dlMontanthtnet): self
    {
        $this->dlMontanthtnet = $dlMontanthtnet;

        return $this;
    }

    public function getDlMontantttc(): ?string
    {
        return $this->dlMontantttc;
    }

    public function setDlMontantttc(?string $dlMontantttc): self
    {
        $this->dlMontantttc = $dlMontantttc;

        return $this;
    }

    public function getDlMvtstock(): ?int
    {
        return $this->dlMvtstock;
    }

    public function setDlMvtstock(?int $dlMvtstock): self
    {
        $this->dlMvtstock = $dlMvtstock;

        return $this;
    }

    public function getDlSolde(): ?bool
    {
        return $this->dlSolde;
    }

    public function setDlSolde(?bool $dlSolde): self
    {
        $this->dlSolde = $dlSolde;

        return $this;
    }

    public function getDlCodetaxe1(): ?string
    {
        return $this->dlCodetaxe1;
    }

    public function setDlCodetaxe1(?string $dlCodetaxe1): self
    {
        $this->dlCodetaxe1 = $dlCodetaxe1;

        return $this;
    }

    public function getDlTaxe1(): ?string
    {
        return $this->dlTaxe1;
    }

    public function setDlTaxe1(?string $dlTaxe1): self
    {
        $this->dlTaxe1 = $dlTaxe1;

        return $this;
    }

    public function getDlCodetaxe2(): ?string
    {
        return $this->dlCodetaxe2;
    }

    public function setDlCodetaxe2(?string $dlCodetaxe2): self
    {
        $this->dlCodetaxe2 = $dlCodetaxe2;

        return $this;
    }

    public function getDlTaxe2(): ?string
    {
        return $this->dlTaxe2;
    }

    public function setDlTaxe2(?string $dlTaxe2): self
    {
        $this->dlTaxe2 = $dlTaxe2;

        return $this;
    }

    public function getDlCodetaxe3(): ?string
    {
        return $this->dlCodetaxe3;
    }

    public function setDlCodetaxe3(?string $dlCodetaxe3): self
    {
        $this->dlCodetaxe3 = $dlCodetaxe3;

        return $this;
    }

    public function getDlTaxe3(): ?string
    {
        return $this->dlTaxe3;
    }

    public function setDlTaxe3(?string $dlTaxe3): self
    {
        $this->dlTaxe3 = $dlTaxe3;

        return $this;
    }

    public function getDlCmup(): ?string
    {
        return $this->dlCmup;
    }

    public function setDlCmup(?string $dlCmup): self
    {
        $this->dlCmup = $dlCmup;

        return $this;
    }

    public function getAfReffourniss(): ?string
    {
        return $this->afReffourniss;
    }

    public function setAfReffourniss(?string $afReffourniss): self
    {
        $this->afReffourniss = $afReffourniss;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(?string $caNum): self
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getDlValorise(): ?int
    {
        return $this->dlValorise;
    }

    public function setDlValorise(?int $dlValorise): self
    {
        $this->dlValorise = $dlValorise;

        return $this;
    }

    public function getDlEscompte(): ?int
    {
        return $this->dlEscompte;
    }

    public function setDlEscompte(?int $dlEscompte): self
    {
        $this->dlEscompte = $dlEscompte;

        return $this;
    }

    public function getEgEnumere1(): ?string
    {
        return $this->egEnumere1;
    }

    public function setEgEnumere1(?string $egEnumere1): self
    {
        $this->egEnumere1 = $egEnumere1;

        return $this;
    }

    public function getEgEnumere2(): ?string
    {
        return $this->egEnumere2;
    }

    public function setEgEnumere2(?string $egEnumere2): self
    {
        $this->egEnumere2 = $egEnumere2;

        return $this;
    }

    public function getAeCommentaire(): ?string
    {
        return $this->aeCommentaire;
    }

    public function setAeCommentaire(?string $aeCommentaire): self
    {
        $this->aeCommentaire = $aeCommentaire;

        return $this;
    }

    public function getAgCodebarre(): ?string
    {
        return $this->agCodebarre;
    }

    public function setAgCodebarre(?string $agCodebarre): self
    {
        $this->agCodebarre = $agCodebarre;

        return $this;
    }

    public function getAgRef(): ?string
    {
        return $this->agRef;
    }

    public function setAgRef(?string $agRef): self
    {
        $this->agRef = $agRef;

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

    public function getDlDesigngamme(): ?string
    {
        return $this->dlDesigngamme;
    }

    public function setDlDesigngamme(?string $dlDesigngamme): self
    {
        $this->dlDesigngamme = $dlDesigngamme;

        return $this;
    }

    public function getDlReforig(): ?string
    {
        return $this->dlReforig;
    }

    public function setDlReforig(?string $dlReforig): self
    {
        $this->dlReforig = $dlReforig;

        return $this;
    }

    public function getDlDescription(): ?string
    {
        return $this->dlDescription;
    }

    public function setDlDescription(?string $dlDescription): self
    {
        $this->dlDescription = $dlDescription;

        return $this;
    }

    public function getDlQteparcolis(): ?string
    {
        return $this->dlQteparcolis;
    }

    public function setDlQteparcolis(?string $dlQteparcolis): self
    {
        $this->dlQteparcolis = $dlQteparcolis;

        return $this;
    }

    public function getDlNbrecolis(): ?string
    {
        return $this->dlNbrecolis;
    }

    public function setDlNbrecolis(?string $dlNbrecolis): self
    {
        $this->dlNbrecolis = $dlNbrecolis;

        return $this;
    }

    public function getDlTypecolis(): ?string
    {
        return $this->dlTypecolis;
    }

    public function setDlTypecolis(?string $dlTypecolis): self
    {
        $this->dlTypecolis = $dlTypecolis;

        return $this;
    }

    public function getCbmarqartcomp(): ?int
    {
        return $this->cbmarqartcomp;
    }

    public function setCbmarqartcomp(?int $cbmarqartcomp): self
    {
        $this->cbmarqartcomp = $cbmarqartcomp;

        return $this;
    }

    public function getCbmarqcr(): ?int
    {
        return $this->cbmarqcr;
    }

    public function setCbmarqcr(?int $cbmarqcr): self
    {
        $this->cbmarqcr = $cbmarqcr;

        return $this;
    }

    public function getCbmarqart(): ?int
    {
        return $this->cbmarqart;
    }

    public function setCbmarqart(?int $cbmarqart): self
    {
        $this->cbmarqart = $cbmarqart;

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

    public function getDProjet(): ?string
    {
        return $this->dProjet;
    }

    public function setDProjet(?string $dProjet): self
    {
        $this->dProjet = $dProjet;

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

    public function getDlUtilisationact(): ?string
    {
        return $this->dlUtilisationact;
    }

    public function setDlUtilisationact(?string $dlUtilisationact): self
    {
        $this->dlUtilisationact = $dlUtilisationact;

        return $this;
    }

    public function getDlUtilisation(): ?string
    {
        return $this->dlUtilisation;
    }

    public function setDlUtilisation(?string $dlUtilisation): self
    {
        $this->dlUtilisation = $dlUtilisation;

        return $this;
    }

    public function getDoAvenant(): ?int
    {
        return $this->doAvenant;
    }

    public function setDoAvenant(?int $doAvenant): self
    {
        $this->doAvenant = $doAvenant;

        return $this;
    }

    public function getCoDv(): ?string
    {
        return $this->coDv;
    }

    public function setCoDv(?string $coDv): self
    {
        $this->coDv = $coDv;

        return $this;
    }

    public function getCoBc(): ?string
    {
        return $this->coBc;
    }

    public function setCoBc(?string $coBc): self
    {
        $this->coBc = $coBc;

        return $this;
    }

    public function getCoBp(): ?string
    {
        return $this->coBp;
    }

    public function setCoBp(?string $coBp): self
    {
        $this->coBp = $coBp;

        return $this;
    }

    public function getCoBl(): ?string
    {
        return $this->coBl;
    }

    public function setCoBl(?string $coBl): self
    {
        $this->coBl = $coBl;

        return $this;
    }

    public function getCoFa(): ?string
    {
        return $this->coFa;
    }

    public function setCoFa(?string $coFa): self
    {
        $this->coFa = $coFa;

        return $this;
    }

    public function getCoBr(): ?string
    {
        return $this->coBr;
    }

    public function setCoBr(?string $coBr): self
    {
        $this->coBr = $coBr;

        return $this;
    }

    public function getCoBa(): ?string
    {
        return $this->coBa;
    }

    public function setCoBa(?string $coBa): self
    {
        $this->coBa = $coBa;

        return $this;
    }

    public function getCoFar(): ?string
    {
        return $this->coFar;
    }

    public function setCoFar(?string $coFar): self
    {
        $this->coFar = $coFar;

        return $this;
    }

    public function getCoFaa(): ?string
    {
        return $this->coFaa;
    }

    public function setCoFaa(?string $coFaa): self
    {
        $this->coFaa = $coFaa;

        return $this;
    }

    public function getGamme1(): ?string
    {
        return $this->gamme1;
    }

    public function setGamme1(?string $gamme1): self
    {
        $this->gamme1 = $gamme1;

        return $this;
    }

    public function getGamme2(): ?string
    {
        return $this->gamme2;
    }

    public function setGamme2(?string $gamme2): self
    {
        $this->gamme2 = $gamme2;

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

    public function getDoDatelivr(): ?\DateTimeInterface
    {
        return $this->doDatelivr;
    }

    public function setDoDatelivr(?\DateTimeInterface $doDatelivr): self
    {
        $this->doDatelivr = $doDatelivr;

        return $this;
    }

    public function getDlNo(): ?int
    {
        return $this->dlNo;
    }

    public function setDlNo(?int $dlNo): self
    {
        $this->dlNo = $dlNo;

        return $this;
    }

    public function getLsNoserie(): ?string
    {
        return $this->lsNoserie;
    }

    public function setLsNoserie(?string $lsNoserie): self
    {
        $this->lsNoserie = $lsNoserie;

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

    public function getDlKiloact(): ?string
    {
        return $this->dlKiloact;
    }

    public function setDlKiloact(?string $dlKiloact): self
    {
        $this->dlKiloact = $dlKiloact;

        return $this;
    }

    public function getDlKilometrage(): ?string
    {
        return $this->dlKilometrage;
    }

    public function setDlKilometrage(?string $dlKilometrage): self
    {
        $this->dlKilometrage = $dlKilometrage;

        return $this;
    }

    public function getDlZone(): ?string
    {
        return $this->dlZone;
    }

    public function setDlZone(?string $dlZone): self
    {
        $this->dlZone = $dlZone;

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

    public function getDoModexpo(): ?string
    {
        return $this->doModexpo;
    }

    public function setDoModexpo(?string $doModexpo): self
    {
        $this->doModexpo = $doModexpo;

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

    public function getDlTnomencl(): ?int
    {
        return $this->dlTnomencl;
    }

    public function setDlTnomencl(?int $dlTnomencl): self
    {
        $this->dlTnomencl = $dlTnomencl;

        return $this;
    }

    public function getDlCodeformule(): ?string
    {
        return $this->dlCodeformule;
    }

    public function setDlCodeformule(?string $dlCodeformule): self
    {
        $this->dlCodeformule = $dlCodeformule;

        return $this;
    }

    public function getDlNatureformule(): ?string
    {
        return $this->dlNatureformule;
    }

    public function setDlNatureformule(?string $dlNatureformule): self
    {
        $this->dlNatureformule = $dlNatureformule;

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

    public function getQteleveetech(): ?int
    {
        return $this->qteleveetech;
    }

    public function setQteleveetech(?int $qteleveetech): self
    {
        $this->qteleveetech = $qteleveetech;

        return $this;
    }

    public function getNumerofichetech(): ?string
    {
        return $this->numerofichetech;
    }

    public function setNumerofichetech(?string $numerofichetech): self
    {
        $this->numerofichetech = $numerofichetech;

        return $this;
    }

    public function getPaiementCompl(): ?string
    {
        return $this->paiementCompl;
    }

    public function setPaiementCompl(?string $paiementCompl): self
    {
        $this->paiementCompl = $paiementCompl;

        return $this;
    }

    public function getARecevoir(): ?string
    {
        return $this->aRecevoir;
    }

    public function setARecevoir(?string $aRecevoir): self
    {
        $this->aRecevoir = $aRecevoir;

        return $this;
    }

    public function getDatevisittech(): ?\DateTimeInterface
    {
        return $this->datevisittech;
    }

    public function setDatevisittech(?\DateTimeInterface $datevisittech): self
    {
        $this->datevisittech = $datevisittech;

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
