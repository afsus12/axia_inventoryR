<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBontravail
 *
 * @ORM\Table(name="D_BONTRAVAIL")
 * @ORM\Entity(repositoryClass="App\Repository\DBontravailRepository")
 */
class DBontravail
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Code", type="string", length=50, nullable=true, options={"comment"="Code centre de coût"})
     */
    private $ccCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Code", type="string", length=50, nullable=true, options={"comment"="Code BT"})
     */
    private $btCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Souche", type="string", length=50, nullable=true, options={"comment"="Souche"})
     */
    private $doSouche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Code", type="string", length=50, nullable=true, options={"comment"="Code Engin"})
     */
    private $rpCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GR_Code", type="string", length=50, nullable=true, options={"comment"="Code Groupe"})
     */
    private $grCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DE_Code", type="string", length=50, nullable=true, options={"comment"="Code Dépôt"})
     */
    private $deCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMP_Code", type="string", length=50, nullable=true, options={"comment"="Code emplacement (engin)"})
     */
    private $empCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BT_DateFin", type="datetime", nullable=true, options={"comment"="Date fin BT"})
     */
    private $btDatefin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BT_DateDebut", type="datetime", nullable=true, options={"comment"="Date début BT"})
     */
    private $btDatedebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BT_DatePrevu", type="datetime", nullable=true, options={"comment"="Date prévu BT"})
     */
    private $btDateprevu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BT_DatePrevuProch", type="datetime", nullable=true, options={"comment"="Date prochaine prévue"})
     */
    private $btDateprevuproch;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BT_DateCreation", type="datetime", nullable=true, options={"comment"="Date de création"})
     */
    private $btDatecreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RP_DateCloture", type="datetime", nullable=true, options={"comment"="Date Clôture "})
     */
    private $rpDatecloture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BT_DateCloture", type="datetime", nullable=true, options={"comment"="Date Clôture BT"})
     */
    private $btDatecloture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Int_Code", type="string", length=50, nullable=true, options={"comment"="Code intervention"})
     */
    private $intCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Remarques", type="string", length=50, nullable=true, options={"comment"="Remarques"})
     */
    private $btRemarques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_EtatOrgane", type="string", length=50, nullable=true, options={"comment"="Etat engin ( 0 : en panne  , 1 : En arret , 2 : En marche )"})
     */
    private $btEtatorgane;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Int_UserDemande", type="string", length=50, nullable=true, options={"comment"="Demandeur de l'intervention"})
     */
    private $intUserdemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AP_Code", type="string", length=50, nullable=true, options={"comment"="Code action"})
     */
    private $apCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BT_Statut", type="smallint", nullable=true, options={"comment"="Statut ( 0 : en attente , 1 : en cours , 2 : validé ) "})
     */
    private $btStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BT_Priorite", type="smallint", nullable=true, options={"comment"="Priorité ( 0 : Faible , 1 : Moyenne , 2 : Haute )"})
     */
    private $btPriorite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BT_ActionType", type="smallint", nullable=true, options={"comment"="Type action BT ( 0: Curatif , 1 : Préventif systématique, 2: Préventif Conditionnel  )"})
     */
    private $btActiontype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Action", type="string", length=50, nullable=true, options={"comment"="Type d'action ( 0 : Kilométrage ,  1 : Utilisation , 2 : Date )"})
     */
    private $btAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_DernierKilometrage", type="bigint", nullable=true, options={"comment"="Valeur du dernier kilométrage"})
     */
    private $rpDernierkilometrage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_DernierUtilisation", type="bigint", nullable=true, options={"comment"="Valeur de la dernière utilisation"})
     */
    private $rpDernierutilisation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_KilometrageCloture", type="bigint", nullable=true, options={"comment"="Kilomètrage de clôture"})
     */
    private $rpKilometragecloture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RP_UtilisationCloture", type="bigint", nullable=true, options={"comment"="Utilisation de clôture"})
     */
    private $rpUtilisationcloture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BT_Decalage", type="bigint", nullable=true, options={"comment"="Différence entre valeur Clôture et valeur actuelle"})
     */
    private $btDecalage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_PrixMO", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Valeur main d'oeuvre"})
     */
    private $btPrixmo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Prix", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="To delete"})
     */
    private $btPrix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_TempsTravail", type="string", length=50, nullable=true, options={"comment"="Temps de travail"})
     */
    private $btTempstravail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_TempsArret", type="string", length=50, nullable=true, options={"comment"="Temps d'arrêrt"})
     */
    private $btTempsarret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Description", type="text", length=-1, nullable=true, options={"comment"="Description"})
     */
    private $btDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMarq", type="integer", nullable=false, options={"comment"="ID unique"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true, options={"default"="CSQL","comment"="Créateur (Utilisateur)"})
     */
    private $cbcreateur = 'CSQL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP","comment"="Date de modification"})
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_TypeT", type="string", length=50, nullable=true, options={"comment"="Type travail (Curatif avec arrêt,Curatif sans arrêt,Dépannage,Visite sous traitant)"})
     */
    private $btTypet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DO_Print", type="smallint", nullable=true, options={"comment"="BT imprimé ( 0 ou 1)"})
     */
    private $doPrint = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_TempsReparation", type="string", length=50, nullable=true, options={"comment"="Temps de réparation "})
     */
    private $btTempsreparation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="int_TempsReparation", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Temps de réparation "})
     */
    private $intTempsreparation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="int_TempsArret", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Temps d'arrêt "})
     */
    private $intTempsarret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_CodeParent", type="string", length=50, nullable=true, options={"comment"="Code Parent de l'équipement "})
     */
    private $rpCodeparent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_EtatParent", type="string", length=50, nullable=true, options={"comment"="Etat de l'équipement parent "})
     */
    private $btEtatparent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="D_Projet", type="string", length=50, nullable=true, options={"comment"="Code Projet affecté "})
     */
    private $dProjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_GameOp", type="string", length=50, nullable=true, options={"comment"="Code de la gamme Opératoire "})
     */
    private $btGameop;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BT_TypeGamme", type="smallint", nullable=true, options={"comment"="Type de l'Opération (0: Date/ 1:Heure / 2: Kilomètre )"})
     */
    private $btTypegamme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_Symptomes", type="string", length=50, nullable=true, options={"comment"="Code du Symptôme"})
     */
    private $btSymptomes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BT_SymtomesText", type="string", length=50, nullable=true, options={"comment"="Intitulé du symptôme"})
     */
    private $btSymtomestext;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BT_TypeSuivi", type="smallint", nullable=true)
     */
    private $btTypesuivi;

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

    public function getDoSouche(): ?string
    {
        return $this->doSouche;
    }

    public function setDoSouche(?string $doSouche): self
    {
        $this->doSouche = $doSouche;

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

    public function getEmpCode(): ?string
    {
        return $this->empCode;
    }

    public function setEmpCode(?string $empCode): self
    {
        $this->empCode = $empCode;

        return $this;
    }

    public function getBtDatefin(): ?\DateTimeInterface
    {
        return $this->btDatefin;
    }

    public function setBtDatefin(?\DateTimeInterface $btDatefin): self
    {
        $this->btDatefin = $btDatefin;

        return $this;
    }

    public function getBtDatedebut(): ?\DateTimeInterface
    {
        return $this->btDatedebut;
    }

    public function setBtDatedebut(?\DateTimeInterface $btDatedebut): self
    {
        $this->btDatedebut = $btDatedebut;

        return $this;
    }

    public function getBtDateprevu(): ?\DateTimeInterface
    {
        return $this->btDateprevu;
    }

    public function setBtDateprevu(?\DateTimeInterface $btDateprevu): self
    {
        $this->btDateprevu = $btDateprevu;

        return $this;
    }

    public function getBtDateprevuproch(): ?\DateTimeInterface
    {
        return $this->btDateprevuproch;
    }

    public function setBtDateprevuproch(?\DateTimeInterface $btDateprevuproch): self
    {
        $this->btDateprevuproch = $btDateprevuproch;

        return $this;
    }

    public function getBtDatecreation(): ?\DateTimeInterface
    {
        return $this->btDatecreation;
    }

    public function setBtDatecreation(?\DateTimeInterface $btDatecreation): self
    {
        $this->btDatecreation = $btDatecreation;

        return $this;
    }

    public function getRpDatecloture(): ?\DateTimeInterface
    {
        return $this->rpDatecloture;
    }

    public function setRpDatecloture(?\DateTimeInterface $rpDatecloture): self
    {
        $this->rpDatecloture = $rpDatecloture;

        return $this;
    }

    public function getBtDatecloture(): ?\DateTimeInterface
    {
        return $this->btDatecloture;
    }

    public function setBtDatecloture(?\DateTimeInterface $btDatecloture): self
    {
        $this->btDatecloture = $btDatecloture;

        return $this;
    }

    public function getIntCode(): ?string
    {
        return $this->intCode;
    }

    public function setIntCode(?string $intCode): self
    {
        $this->intCode = $intCode;

        return $this;
    }

    public function getBtRemarques(): ?string
    {
        return $this->btRemarques;
    }

    public function setBtRemarques(?string $btRemarques): self
    {
        $this->btRemarques = $btRemarques;

        return $this;
    }

    public function getBtEtatorgane(): ?string
    {
        return $this->btEtatorgane;
    }

    public function setBtEtatorgane(?string $btEtatorgane): self
    {
        $this->btEtatorgane = $btEtatorgane;

        return $this;
    }

    public function getIntUserdemande(): ?string
    {
        return $this->intUserdemande;
    }

    public function setIntUserdemande(?string $intUserdemande): self
    {
        $this->intUserdemande = $intUserdemande;

        return $this;
    }

    public function getApCode(): ?string
    {
        return $this->apCode;
    }

    public function setApCode(?string $apCode): self
    {
        $this->apCode = $apCode;

        return $this;
    }

    public function getBtStatut(): ?int
    {
        return $this->btStatut;
    }

    public function setBtStatut(?int $btStatut): self
    {
        $this->btStatut = $btStatut;

        return $this;
    }

    public function getBtPriorite(): ?int
    {
        return $this->btPriorite;
    }

    public function setBtPriorite(?int $btPriorite): self
    {
        $this->btPriorite = $btPriorite;

        return $this;
    }

    public function getBtActiontype(): ?int
    {
        return $this->btActiontype;
    }

    public function setBtActiontype(?int $btActiontype): self
    {
        $this->btActiontype = $btActiontype;

        return $this;
    }

    public function getBtAction(): ?string
    {
        return $this->btAction;
    }

    public function setBtAction(?string $btAction): self
    {
        $this->btAction = $btAction;

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

    public function getRpKilometragecloture(): ?string
    {
        return $this->rpKilometragecloture;
    }

    public function setRpKilometragecloture(?string $rpKilometragecloture): self
    {
        $this->rpKilometragecloture = $rpKilometragecloture;

        return $this;
    }

    public function getRpUtilisationcloture(): ?string
    {
        return $this->rpUtilisationcloture;
    }

    public function setRpUtilisationcloture(?string $rpUtilisationcloture): self
    {
        $this->rpUtilisationcloture = $rpUtilisationcloture;

        return $this;
    }

    public function getBtDecalage(): ?string
    {
        return $this->btDecalage;
    }

    public function setBtDecalage(?string $btDecalage): self
    {
        $this->btDecalage = $btDecalage;

        return $this;
    }

    public function getBtPrixmo(): ?string
    {
        return $this->btPrixmo;
    }

    public function setBtPrixmo(?string $btPrixmo): self
    {
        $this->btPrixmo = $btPrixmo;

        return $this;
    }

    public function getBtPrix(): ?string
    {
        return $this->btPrix;
    }

    public function setBtPrix(?string $btPrix): self
    {
        $this->btPrix = $btPrix;

        return $this;
    }

    public function getBtTempstravail(): ?string
    {
        return $this->btTempstravail;
    }

    public function setBtTempstravail(?string $btTempstravail): self
    {
        $this->btTempstravail = $btTempstravail;

        return $this;
    }

    public function getBtTempsarret(): ?string
    {
        return $this->btTempsarret;
    }

    public function setBtTempsarret(?string $btTempsarret): self
    {
        $this->btTempsarret = $btTempsarret;

        return $this;
    }

    public function getBtDescription(): ?string
    {
        return $this->btDescription;
    }

    public function setBtDescription(?string $btDescription): self
    {
        $this->btDescription = $btDescription;

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

    public function getBtTypet(): ?string
    {
        return $this->btTypet;
    }

    public function setBtTypet(?string $btTypet): self
    {
        $this->btTypet = $btTypet;

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

    public function getBtTempsreparation(): ?string
    {
        return $this->btTempsreparation;
    }

    public function setBtTempsreparation(?string $btTempsreparation): self
    {
        $this->btTempsreparation = $btTempsreparation;

        return $this;
    }

    public function getIntTempsreparation(): ?string
    {
        return $this->intTempsreparation;
    }

    public function setIntTempsreparation(?string $intTempsreparation): self
    {
        $this->intTempsreparation = $intTempsreparation;

        return $this;
    }

    public function getIntTempsarret(): ?string
    {
        return $this->intTempsarret;
    }

    public function setIntTempsarret(?string $intTempsarret): self
    {
        $this->intTempsarret = $intTempsarret;

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

    public function getBtEtatparent(): ?string
    {
        return $this->btEtatparent;
    }

    public function setBtEtatparent(?string $btEtatparent): self
    {
        $this->btEtatparent = $btEtatparent;

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

    public function getBtGameop(): ?string
    {
        return $this->btGameop;
    }

    public function setBtGameop(?string $btGameop): self
    {
        $this->btGameop = $btGameop;

        return $this;
    }

    public function getBtTypegamme(): ?int
    {
        return $this->btTypegamme;
    }

    public function setBtTypegamme(?int $btTypegamme): self
    {
        $this->btTypegamme = $btTypegamme;

        return $this;
    }

    public function getBtSymptomes(): ?string
    {
        return $this->btSymptomes;
    }

    public function setBtSymptomes(?string $btSymptomes): self
    {
        $this->btSymptomes = $btSymptomes;

        return $this;
    }

    public function getBtSymtomestext(): ?string
    {
        return $this->btSymtomestext;
    }

    public function setBtSymtomestext(?string $btSymtomestext): self
    {
        $this->btSymtomestext = $btSymtomestext;

        return $this;
    }

    public function getBtTypesuivi(): ?int
    {
        return $this->btTypesuivi;
    }

    public function setBtTypesuivi(?int $btTypesuivi): self
    {
        $this->btTypesuivi = $btTypesuivi;

        return $this;
    }


}
