<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * DRessources
 *
 * @ORM\Table(name="D_RESSOURCES")
 * @ORM\Entity(repositoryClass="App\Repository\DRessourcesRepository")
 */
class DRessources
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Code", type="string", length=50, nullable=true, options={"comment"="Code Centre du coût "})
     */
    private $ccCode;

    /**
     * @var string
     *
     * @ORM\Column(name="RP_Code", type="string", length=50, nullable=false, options={"comment"="Code de l'équipement "})
     */
    private $rpCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeParent", type="string", length=50, nullable=true, options={"comment"="Code de l'équipement Parent "})
     */
    private $rpCodeparent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Intitule", type="string", length=50, nullable=true, options={"comment"="Intitulé de l'équipement "})
     */
    private $rpIntitule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Immatriculation", type="string", length=50, nullable=true, options={"comment"="Immatriculation "})
     */
    private $rpImmatriculation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Complement", type="string", length=50, nullable=true, options={"comment"="Complément "})
     */
    private $rpComplement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Type", type="smallint", nullable=true, options={"comment"="TYpe de l'équipement (0: fixe/1: Roulant) "})
     */
    private $rpType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Etat", type="smallint", nullable=true, options={"comment"="Etat de l'équipement (0: en marche / 1: en panne /2: en arrêt ) "})
     */
    private $rpEtat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_TypeAction", type="smallint", nullable=true, options={"comment"="Type d'action "})
     */
    private $rpTypeaction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CT_Num", type="string", length=50, nullable=true, options={"comment"="N° Fournisseur "})
     */
    private $ctNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMP_Code", type="string", length=50, nullable=true, options={"comment"="Code de l'emplacement "})
     */
    private $empCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=true, options={"comment"="Code de l'employé "})
     */
    private $emCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DateFab", type="datetime", nullable=true, options={"comment"="Date de fabrication "})
     */
    private $rpDatefab;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DateMS", type="datetime", nullable=true, options={"comment"="Date de Mise en Service "})
     */
    private $rpDatems;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DebutBudget", type="datetime", nullable=true, options={"comment"="Date de début du Budget "})
     */
    private $rpDebutbudget;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_DureeBudget", type="smallint", nullable=true, options={"comment"="durée du Budget"})
     */
    private $rpDureebudget;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_FinBudget", type="datetime", nullable=true, options={"comment"="Date de fin du Budget "})
     */
    private $rpFinbudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_MontantBudget", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Montant du Budget "})
     */
    private $rpMontantbudget;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DebutGarantie", type="datetime", nullable=true, options={"comment"="Date de début de la garantie "})
     */
    private $rpDebutgarantie;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_FinGarantie", type="datetime", nullable=true, options={"comment"="Date de fin de la garantie "})
     */
    private $rpFingarantie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_NumSerie", type="string", length=50, nullable=true, options={"comment"="Numéro de Série "})
     */
    private $rpNumserie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeDouane", type="string", length=50, nullable=true, options={"comment"="Code douane "})
     */
    private $rpCodedouane;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Caracteristiques", type="string", length=100, nullable=true, options={"comment"="Caractéristiques "})
     */
    private $rpCaracteristiques;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Regime", type="smallint", nullable=true, options={"comment"="Régime de l'équipement (0: Continu /1: discontinu )"})
     */
    private $rpRegime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Marque", type="string", length=50, nullable=true, options={"comment"="Marque "})
     */
    private $rpMarque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Model", type="string", length=50, nullable=true, options={"comment"="Modèle "})
     */
    private $rpModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CoutArret", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Coût d'arrêt "})
     */
    private $rpCoutarret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CoutLocation", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Coût de Location "})
     */
    private $rpCoutlocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CoutStd", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Coût Standard"})
     */
    private $rpCoutstd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Puissance", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Puissance"})
     */
    private $rpPuissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Chasis", type="string", length=50, nullable=true, options={"comment"="N° de chassis"})
     */
    private $rpChasis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Moteur", type="string", length=50, nullable=true, options={"comment"="Moteur "})
     */
    private $rpMoteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeAnalytique", type="string", length=50, nullable=true, options={"comment"="Code Analytique "})
     */
    private $rpCodeanalytique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Immobilisation", type="string", length=50, nullable=true, options={"comment"="Immobilisation "})
     */
    private $rpImmobilisation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DateAquisition", type="datetime", nullable=true, options={"comment"="Date d'acquisition "})
     */
    private $rpDateaquisition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_ValeurAquisition", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Valeur d'Acquisition "})
     */
    private $rpValeuraquisition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_DernierKilometrage", type="bigint", nullable=true, options={"comment"="Dernier Kilométrage Saisi"})
     */
    private $rpDernierkilometrage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_DernierUtilisation", type="bigint", nullable=true, options={"comment"="Dernière Utilisation Saisie"})
     */
    private $rpDernierutilisation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DerniereIntervention", type="datetime", nullable=true, options={"comment"="Date de la dernière Intervention "})
     */
    private $rpDerniereintervention;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_Visite", type="datetime", nullable=true, options={"comment"="Date de la dernière Visite"})
     */
    private $rpVisite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Capacite", type="integer", nullable=true, options={"comment"="Capacité "})
     */
    private $rpCapacite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Commentaire", type="string", length=50, nullable=true, options={"comment"="Commentaire "})
     */
    private $rpCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeExterne", type="string", length=50, nullable=true, options={"comment"="Code Externe "})
     */
    private $rpCodeexterne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Unite", type="string", length=50, nullable=true, options={"comment"="Unité "})
     */
    private $rpUnite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_StatContrats", type="integer", nullable=true, options={"comment"="Statistiques des contrats "})
     */
    private $rpStatcontrats;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_StatActions", type="integer", nullable=true, options={"comment"="Statistiques des actions "})
     */
    private $rpStatactions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Photo", type="blob", nullable=true, options={"comment"="Photo de l'équipement "})
     */
    private $rpPhoto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Sommeil", type="smallint", nullable=true, options={"comment"="En Sommeil :1 / Actif :0"})
     */
    private $rpSommeil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_UniteCout", type="string", length=50, nullable=true, options={"comment"="Unité des Coûts "})
     */
    private $rpUnitecout;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DateCreation", type="datetime", nullable=true, options={"comment"="Date de Création "})
     */
    private $rpDatecreation;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMarq", type="integer", nullable=false, options={"comment"="Identifiant Unique "})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true, options={"default"="CSQL","comment"="Créateur "})
     */
    private $cbcreateur = 'CSQL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP","comment"="Date de Création "})
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true, options={"comment"="Code du dépôt "})
     */
    private $deCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Affectation", type="smallint", nullable=true, options={"comment"="Affectation de l'équipement (0: Oui /1: Non )"})
     */
    private $rpAffectation = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_Type_Emplacement", type="smallint", nullable=true, options={"comment"="Type d'emplacement de l'équipement (1: par emplacement / 0: par dépôt )"})
     */
    private $rpTypeEmplacement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_SuiviStock", type="smallint", nullable=true, options={"comment"="Suivi en stock( 1:Oui /0 : Non) "})
     */
    private $rpSuivistock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_HoursWork", type="string", length=50, nullable=true, options={"comment"="Total des Heures de travail "})
     */
    private $rpHourswork;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_NbrePannes", type="integer", nullable=true, options={"comment"="Nombre de pannes "})
     */
    private $rpNbrepannes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_DernierPompage", type="bigint", nullable=true, options={"comment"="Dernier Pompage "})
     */
    private $rpDernierpompage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Consignes", type="string", length=0, nullable=true, options={"comment"="Consignes de sécurité "})
     */
    private $rpConsignes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Prefix", type="string", length=50, nullable=true, options={"comment"="Préfixe des organes "})
     */
    private $rpPrefix;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_ProchaineIntervention", type="datetime", nullable=true)
     */
    private $rpProchaineintervention;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_couleur", type="string", length=50, nullable=true)
     */
    private $rpCouleur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_imageCouleur", type="blob", nullable=true)
     */
    private $rpImagecouleur;

    public function getCcCode(): ?string
    {
        return $this->ccCode;
    }

    public function setCcCode(?string $ccCode): self
    {
        $this->ccCode = $ccCode;

        return $this;
    }

    public function getRpCode(): ?string
    {
        return $this->rpCode;
    }

    public function setRpCode(string $rpCode): self
    {
        $this->rpCode = $rpCode;

        return $this;
    }

    public function getRpCodeparent(): ?string
    {
        return $this->rpCodeparent;
    }

    public function setRpCodeparent(?string $rpCodeparent): self
    {
        $this->rpCodeparent = $rpCodeparent;

        return $this;
    }

    public function getRpIntitule(): ?string
    {
        return $this->rpIntitule;
    }

    public function setRpIntitule(?string $rpIntitule): self
    {
        $this->rpIntitule = $rpIntitule;

        return $this;
    }

    public function getRpImmatriculation(): ?string
    {
        return $this->rpImmatriculation;
    }

    public function setRpImmatriculation(?string $rpImmatriculation): self
    {
        $this->rpImmatriculation = $rpImmatriculation;

        return $this;
    }

    public function getRpComplement(): ?string
    {
        return $this->rpComplement;
    }

    public function setRpComplement(?string $rpComplement): self
    {
        $this->rpComplement = $rpComplement;

        return $this;
    }

    public function getRpType(): ?int
    {
        return $this->rpType;
    }

    public function setRpType(?int $rpType): self
    {
        $this->rpType = $rpType;

        return $this;
    }

    public function getRpEtat(): ?int
    {
        return $this->rpEtat;
    }

    public function setRpEtat(?int $rpEtat): self
    {
        $this->rpEtat = $rpEtat;

        return $this;
    }

    public function getRpTypeaction(): ?int
    {
        return $this->rpTypeaction;
    }

    public function setRpTypeaction(?int $rpTypeaction): self
    {
        $this->rpTypeaction = $rpTypeaction;

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

    public function getRpDatefab(): ?\DateTimeInterface
    {
        return $this->rpDatefab;
    }

    public function setRpDatefab(?\DateTimeInterface $rpDatefab): self
    {
        $this->rpDatefab = $rpDatefab;

        return $this;
    }

    public function getRpDatems(): ?\DateTimeInterface
    {
        return $this->rpDatems;
    }

    public function setRpDatems(?\DateTimeInterface $rpDatems): self
    {
        $this->rpDatems = $rpDatems;

        return $this;
    }

    public function getRpDebutbudget(): ?\DateTimeInterface
    {
        return $this->rpDebutbudget;
    }

    public function setRpDebutbudget(?\DateTimeInterface $rpDebutbudget): self
    {
        $this->rpDebutbudget = $rpDebutbudget;

        return $this;
    }

    public function getRpDureebudget(): ?int
    {
        return $this->rpDureebudget;
    }

    public function setRpDureebudget(?int $rpDureebudget): self
    {
        $this->rpDureebudget = $rpDureebudget;

        return $this;
    }

    public function getRpFinbudget(): ?\DateTimeInterface
    {
        return $this->rpFinbudget;
    }

    public function setRpFinbudget(?\DateTimeInterface $rpFinbudget): self
    {
        $this->rpFinbudget = $rpFinbudget;

        return $this;
    }

    public function getRpMontantbudget(): ?string
    {
        return $this->rpMontantbudget;
    }

    public function setRpMontantbudget(?string $rpMontantbudget): self
    {
        $this->rpMontantbudget = $rpMontantbudget;

        return $this;
    }

    public function getRpDebutgarantie(): ?\DateTimeInterface
    {
        return $this->rpDebutgarantie;
    }

    public function setRpDebutgarantie(?\DateTimeInterface $rpDebutgarantie): self
    {
        $this->rpDebutgarantie = $rpDebutgarantie;

        return $this;
    }

    public function getRpFingarantie(): ?\DateTimeInterface
    {
        return $this->rpFingarantie;
    }

    public function setRpFingarantie(?\DateTimeInterface $rpFingarantie): self
    {
        $this->rpFingarantie = $rpFingarantie;

        return $this;
    }

    public function getRpNumserie(): ?string
    {
        return $this->rpNumserie;
    }

    public function setRpNumserie(?string $rpNumserie): self
    {
        $this->rpNumserie = $rpNumserie;

        return $this;
    }

    public function getRpCodedouane(): ?string
    {
        return $this->rpCodedouane;
    }

    public function setRpCodedouane(?string $rpCodedouane): self
    {
        $this->rpCodedouane = $rpCodedouane;

        return $this;
    }

    public function getRpCaracteristiques(): ?string
    {
        return $this->rpCaracteristiques;
    }

    public function setRpCaracteristiques(?string $rpCaracteristiques): self
    {
        $this->rpCaracteristiques = $rpCaracteristiques;

        return $this;
    }

    public function getRpRegime(): ?int
    {
        return $this->rpRegime;
    }

    public function setRpRegime(?int $rpRegime): self
    {
        $this->rpRegime = $rpRegime;

        return $this;
    }

    public function getRpMarque(): ?string
    {
        return $this->rpMarque;
    }

    public function setRpMarque(?string $rpMarque): self
    {
        $this->rpMarque = $rpMarque;

        return $this;
    }

    public function getRpModel(): ?string
    {
        return $this->rpModel;
    }

    public function setRpModel(?string $rpModel): self
    {
        $this->rpModel = $rpModel;

        return $this;
    }

    public function getRpCoutarret(): ?string
    {
        return $this->rpCoutarret;
    }

    public function setRpCoutarret(?string $rpCoutarret): self
    {
        $this->rpCoutarret = $rpCoutarret;

        return $this;
    }

    public function getRpCoutlocation(): ?string
    {
        return $this->rpCoutlocation;
    }

    public function setRpCoutlocation(?string $rpCoutlocation): self
    {
        $this->rpCoutlocation = $rpCoutlocation;

        return $this;
    }

    public function getRpCoutstd(): ?string
    {
        return $this->rpCoutstd;
    }

    public function setRpCoutstd(?string $rpCoutstd): self
    {
        $this->rpCoutstd = $rpCoutstd;

        return $this;
    }

    public function getRpPuissance(): ?string
    {
        return $this->rpPuissance;
    }

    public function setRpPuissance(?string $rpPuissance): self
    {
        $this->rpPuissance = $rpPuissance;

        return $this;
    }

    public function getRpChasis(): ?string
    {
        return $this->rpChasis;
    }

    public function setRpChasis(?string $rpChasis): self
    {
        $this->rpChasis = $rpChasis;

        return $this;
    }

    public function getRpMoteur(): ?string
    {
        return $this->rpMoteur;
    }

    public function setRpMoteur(?string $rpMoteur): self
    {
        $this->rpMoteur = $rpMoteur;

        return $this;
    }

    public function getRpCodeanalytique(): ?string
    {
        return $this->rpCodeanalytique;
    }

    public function setRpCodeanalytique(?string $rpCodeanalytique): self
    {
        $this->rpCodeanalytique = $rpCodeanalytique;

        return $this;
    }

    public function getRpImmobilisation(): ?string
    {
        return $this->rpImmobilisation;
    }

    public function setRpImmobilisation(?string $rpImmobilisation): self
    {
        $this->rpImmobilisation = $rpImmobilisation;

        return $this;
    }

    public function getRpDateaquisition(): ?\DateTimeInterface
    {
        return $this->rpDateaquisition;
    }

    public function setRpDateaquisition(?\DateTimeInterface $rpDateaquisition): self
    {
        $this->rpDateaquisition = $rpDateaquisition;

        return $this;
    }

    public function getRpValeuraquisition(): ?string
    {
        return $this->rpValeuraquisition;
    }

    public function setRpValeuraquisition(?string $rpValeuraquisition): self
    {
        $this->rpValeuraquisition = $rpValeuraquisition;

        return $this;
    }

    public function getRpDernierkilometrage(): ?string
    {
        return $this->rpDernierkilometrage;
    }

    public function setRpDernierkilometrage(?string $rpDernierkilometrage): self
    {
        $this->rpDernierkilometrage = $rpDernierkilometrage;

        return $this;
    }

    public function getRpDernierutilisation(): ?string
    {
        return $this->rpDernierutilisation;
    }

    public function setRpDernierutilisation(?string $rpDernierutilisation): self
    {
        $this->rpDernierutilisation = $rpDernierutilisation;

        return $this;
    }

    public function getRpDerniereintervention(): ?\DateTimeInterface
    {
        return $this->rpDerniereintervention;
    }

    public function setRpDerniereintervention(?\DateTimeInterface $rpDerniereintervention): self
    {
        $this->rpDerniereintervention = $rpDerniereintervention;

        return $this;
    }

    public function getRpVisite(): ?\DateTimeInterface
    {
        return $this->rpVisite;
    }

    public function setRpVisite(?\DateTimeInterface $rpVisite): self
    {
        $this->rpVisite = $rpVisite;

        return $this;
    }

    public function getRpCapacite(): ?int
    {
        return $this->rpCapacite;
    }

    public function setRpCapacite(?int $rpCapacite): self
    {
        $this->rpCapacite = $rpCapacite;

        return $this;
    }

    public function getRpCommentaire(): ?string
    {
        return $this->rpCommentaire;
    }

    public function setRpCommentaire(?string $rpCommentaire): self
    {
        $this->rpCommentaire = $rpCommentaire;

        return $this;
    }

    public function getRpCodeexterne(): ?string
    {
        return $this->rpCodeexterne;
    }

    public function setRpCodeexterne(?string $rpCodeexterne): self
    {
        $this->rpCodeexterne = $rpCodeexterne;

        return $this;
    }

    public function getRpUnite(): ?string
    {
        return $this->rpUnite;
    }

    public function setRpUnite(?string $rpUnite): self
    {
        $this->rpUnite = $rpUnite;

        return $this;
    }

    public function getRpStatcontrats(): ?int
    {
        return $this->rpStatcontrats;
    }

    public function setRpStatcontrats(?int $rpStatcontrats): self
    {
        $this->rpStatcontrats = $rpStatcontrats;

        return $this;
    }

    public function getRpStatactions(): ?int
    {
        return $this->rpStatactions;
    }

    public function setRpStatactions(?int $rpStatactions): self
    {
        $this->rpStatactions = $rpStatactions;

        return $this;
    }

    public function getRpPhoto()
    {
        return $this->rpPhoto;
    }

    public function setRpPhoto($rpPhoto): self
    {
        $this->rpPhoto = $rpPhoto;

        return $this;
    }

    public function getRpSommeil(): ?int
    {
        return $this->rpSommeil;
    }

    public function setRpSommeil(?int $rpSommeil): self
    {
        $this->rpSommeil = $rpSommeil;

        return $this;
    }

    public function getRpUnitecout(): ?string
    {
        return $this->rpUnitecout;
    }

    public function setRpUnitecout(?string $rpUnitecout): self
    {
        $this->rpUnitecout = $rpUnitecout;

        return $this;
    }

    public function getRpDatecreation(): ?\DateTimeInterface
    {
        return $this->rpDatecreation;
    }

    public function setRpDatecreation(?\DateTimeInterface $rpDatecreation): self
    {
        $this->rpDatecreation = $rpDatecreation;

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

    public function getDeCode(): ?string
    {
        return $this->deCode;
    }

    public function setDeCode(?string $deCode): self
    {
        $this->deCode = $deCode;

        return $this;
    }

    public function getRpAffectation(): ?int
    {
        return $this->rpAffectation;
    }

    public function setRpAffectation(?int $rpAffectation): self
    {
        $this->rpAffectation = $rpAffectation;

        return $this;
    }

    public function getRpTypeEmplacement(): ?int
    {
        return $this->rpTypeEmplacement;
    }

    public function setRpTypeEmplacement(?int $rpTypeEmplacement): self
    {
        $this->rpTypeEmplacement = $rpTypeEmplacement;

        return $this;
    }

    public function getRpSuivistock(): ?int
    {
        return $this->rpSuivistock;
    }

    public function setRpSuivistock(?int $rpSuivistock): self
    {
        $this->rpSuivistock = $rpSuivistock;

        return $this;
    }

    public function getRpHourswork(): ?string
    {
        return $this->rpHourswork;
    }

    public function setRpHourswork(?string $rpHourswork): self
    {
        $this->rpHourswork = $rpHourswork;

        return $this;
    }

    public function getRpNbrepannes(): ?int
    {
        return $this->rpNbrepannes;
    }

    public function setRpNbrepannes(?int $rpNbrepannes): self
    {
        $this->rpNbrepannes = $rpNbrepannes;

        return $this;
    }

    public function getRpDernierpompage(): ?string
    {
        return $this->rpDernierpompage;
    }

    public function setRpDernierpompage(?string $rpDernierpompage): self
    {
        $this->rpDernierpompage = $rpDernierpompage;

        return $this;
    }

    public function getRpConsignes(): ?string
    {
        return $this->rpConsignes;
    }

    public function setRpConsignes(?string $rpConsignes): self
    {
        $this->rpConsignes = $rpConsignes;

        return $this;
    }

    public function getRpPrefix(): ?string
    {
        return $this->rpPrefix;
    }

    public function setRpPrefix(?string $rpPrefix): self
    {
        $this->rpPrefix = $rpPrefix;

        return $this;
    }

    public function getRpProchaineintervention(): ?\DateTimeInterface
    {
        return $this->rpProchaineintervention;
    }

    public function setRpProchaineintervention(?\DateTimeInterface $rpProchaineintervention): self
    {
        $this->rpProchaineintervention = $rpProchaineintervention;

        return $this;
    }

    public function getRpCouleur(): ?string
    {
        return $this->rpCouleur;
    }

    public function setRpCouleur(?string $rpCouleur): self
    {
        $this->rpCouleur = $rpCouleur;

        return $this;
    }

    public function getRpImagecouleur()
    {
        return $this->rpImagecouleur;
    }

    public function setRpImagecouleur($rpImagecouleur): self
    {
        $this->rpImagecouleur = $rpImagecouleur;

        return $this;
    }


}
