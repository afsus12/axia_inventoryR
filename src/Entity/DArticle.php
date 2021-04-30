<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use App\Controller\DArticleController;
use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\Serializer\Annotation\Groups;





/**
 * DArticle
 *
 * @ORM\Table(name="D_ARTICLE")
 * @ORM\Entity(repositoryClass="App\Repository\DArticleRepository")  
 * 
 */
class DArticle
{ 
    


 
    /**
     * @var string
     *
     * @ORM\Column(name="AR_Ref", type="string", length=50, nullable=false, options={"comment"="Référence de l’article"})
     * 
     * 
     */
    private $arRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Design", type="string", length=500, nullable=true, options={"comment"="Désignation de l’article"})
     *  
     */
    private $arDesign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_RefOrig", type="string", length=50, nullable=true, options={"comment"="Référence d'origine"})
     * 
     */
    private $arReforig;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Type", type="smallint", nullable=true, options={"comment"="Type Article ,standard ou gamme (0=Standard) et (1=Gamme)"})
     */
    private $arType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme1", type="string", length=50, nullable=true)
     */
    private $gamme1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gamme2", type="string", length=50, nullable=true)
     */
    private $gamme2;

    /**
     * @var string
     *
     * @ORM\Column(name="FA_CodeFamille", type="string", length=50, nullable=false, options={"comment"="Code de la famille "})
     */
    private $faCodefamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Unite", type="string", length=50, nullable=true, options={"comment"="Unité de l'article"})
     *  
     */
    private $arUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Commentaire", type="string", length=500, nullable=true, options={"comment"="Commentaire"})
     * 
     */
    private $arCommentaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Etat", type="smallint", nullable=true)
     */
    private $arEtat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_SuiviStock", type="smallint", nullable=true, options={"comment"="Suivi Stock : (0=Acun) et (1=CMUP)"})
     */
    private $arSuivistock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_CodeBarre", type="string", length=50, nullable=true, options={"comment"="Code à barre"})
     *  
     */
    private $arCodebarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Model", type="string", length=50, nullable=true, options={"comment"="Modéle"})

     */
    private $arModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_CodeAnalytique", type="string", length=50, nullable=true, options={"comment"="Code analytique"})
     */
    private $arCodeanalytique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Immobilisation", type="integer", nullable=true, options={"comment"="Immobilisation"})
     */
    private $arImmobilisation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_PrixTTC", type="smallint", nullable=true, options={"comment"="Prix TTC"})
     * 
     */
    private $arPrixttc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PrixAch", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Prix Achat"})
     */
    private $arPrixach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PrixAchNouv", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Dérnier prix d'achat HT"})
     */
    private $arPrixachnouv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PUNet", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Prix unitaire net"})
     */
    private $arPunet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Coef", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arCoef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_DelaiLiv", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Délai de livraison"})
     */
    private $arDelailiv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Garantie", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Garantie"})
     */
    private $arGarantie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_DelaiS", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Délai de sécurité"})
     */
    private $arDelais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_DelaiP", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Délai préparation"})
     */
    private $arDelaip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Comp", type="string", length=500, nullable=true, options={"comment"="Complément"})
     */
    private $arComp;

    /**
     * @var string|null
     * 
     * @ORM\Column(name="AR_Photo", type="blob", nullable=true, options={"comment"="Photo Article"})
     * 
     */
    private $arPhoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PrixLoc", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Coeifficient"})
     */
    private $arPrixloc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PrixVente", type="decimal", precision=24, scale=6, nullable=true, options={"comment"="Coût standard"})
     */
    private $arPrixvente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Nomencl", type="smallint", nullable=true)
     */
    private $arNomencl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RP_Code", type="string", length=50, nullable=true)
     */
    private $rpCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Publier", type="smallint", nullable=true)
     */
    private $arPublier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Imprimer", type="smallint", nullable=true)
     */
    private $arImprimer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_ParMetrage", type="smallint", nullable=true)
     */
    private $arParmetrage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_ParPoids", type="smallint", nullable=true)
     */
    private $arParpoids;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Hauteur", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arHauteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Longueur", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arLongueur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Largeur", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arLargeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PoidsNet", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arPoidsnet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_PoidsBrut", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arPoidsbrut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_Lier", type="smallint", nullable=true)
     */
    private $arLier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_PrixArtLier", type="smallint", nullable=true)
     */
    private $arPrixartlier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_UniteLier", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $arUnitelier;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AR_Assistance", type="boolean", nullable=true)
     */
    private $arAssistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_DescAssitance", type="string", length=50, nullable=true)
     */
    private $arDescassitance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_SuivitRetour", type="smallint", nullable=true)
     */
    private $arSuivitretour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AR_Nature", type="string", length=50, nullable=true)
     */
    private $arNature;

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
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=true, options={"default"="CSQL","comment"="Createur (Utilisateur)"})
     */
    private $cbcreateur = 'CSQL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP","comment"="Date de modification"})
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_HorsStat", type="smallint", nullable=true)
     */
    private $arHorsstat;
    
    /**
     * @var string|null
     *
     * @ORM\Column(type="decimal", nullable=true, name="[Production(Journaliere)]", precision=24, scale=6)
     */
    private $productionJournaliere;
    /**
     * @var int|null
     *
     * @ORM\Column(name="AR_ParZone", type="smallint", nullable=true)
     */
    private $arParzone;




    public function getArRef(): ?string
    {
        return $this->arRef;
    }

    public function setArRef(string $arRef): self
    {
        $this->arRef = $arRef;

        return $this;
    }

    public function getArDesign(): ?string
    {
        return $this->arDesign;
    }

    public function setArDesign(?string $arDesign): self
    {
        $this->arDesign = $arDesign;

        return $this;
    }

    public function getArReforig(): ?string
    {
        return $this->arReforig;
    }

    public function setArReforig(?string $arReforig): self
    {
        $this->arReforig = $arReforig;

        return $this;
    }

    public function getArType(): ?int
    {
        return $this->arType;
    }

    public function setArType(?int $arType): self
    {
        $this->arType = $arType;

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

    public function getFaCodefamille(): ?string
    {
        return $this->faCodefamille;
    }

    public function setFaCodefamille(string $faCodefamille): self
    {
        $this->faCodefamille = $faCodefamille;

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

    public function getArCommentaire(): ?string
    {
        return $this->arCommentaire;
    }

    public function setArCommentaire(?string $arCommentaire): self
    {
        $this->arCommentaire = $arCommentaire;

        return $this;
    }

    public function getArEtat(): ?int
    {
        return $this->arEtat;
    }

    public function setArEtat(?int $arEtat): self
    {
        $this->arEtat = $arEtat;

        return $this;
    }

    public function getArSuivistock(): ?int
    {
        return $this->arSuivistock;
    }

    public function setArSuivistock(?int $arSuivistock): self
    {
        $this->arSuivistock = $arSuivistock;

        return $this;
    }

    public function getArCodebarre(): ?string
    {
        return $this->arCodebarre;
    }

    public function setArCodebarre(?string $arCodebarre): self
    {
        $this->arCodebarre = $arCodebarre;

        return $this;
    }

    public function getArModel(): ?string
    {
        return $this->arModel;
    }

    public function setArModel(?string $arModel): self
    {
        $this->arModel = $arModel;

        return $this;
    }

    public function getArCodeanalytique(): ?string
    {
        return $this->arCodeanalytique;
    }

    public function setArCodeanalytique(?string $arCodeanalytique): self
    {
        $this->arCodeanalytique = $arCodeanalytique;

        return $this;
    }

    public function getArImmobilisation(): ?int
    {
        return $this->arImmobilisation;
    }

    public function setArImmobilisation(?int $arImmobilisation): self
    {
        $this->arImmobilisation = $arImmobilisation;

        return $this;
    }

    public function getArPrixttc(): ?int
    {
        return $this->arPrixttc;
    }

    public function setArPrixttc(?int $arPrixttc): self
    {
        $this->arPrixttc = $arPrixttc;

        return $this;
    }

    public function getArPrixach(): ?string
    {
        return $this->arPrixach;
    }

    public function setArPrixach(?string $arPrixach): self
    {
        $this->arPrixach = $arPrixach;

        return $this;
    }

    public function getArPrixachnouv(): ?string
    {
        return $this->arPrixachnouv;
    }

    public function setArPrixachnouv(?string $arPrixachnouv): self
    {
        $this->arPrixachnouv = $arPrixachnouv;

        return $this;
    }

    public function getArPunet(): ?string
    {
        return $this->arPunet;
    }

    public function setArPunet(?string $arPunet): self
    {
        $this->arPunet = $arPunet;

        return $this;
    }

    public function getArCoef(): ?string
    {
        return $this->arCoef;
    }

    public function setArCoef(?string $arCoef): self
    {
        $this->arCoef = $arCoef;

        return $this;
    }

    public function getArDelailiv(): ?string
    {
        return $this->arDelailiv;
    }

    public function setArDelailiv(?string $arDelailiv): self
    {
        $this->arDelailiv = $arDelailiv;

        return $this;
    }

    public function getArGarantie(): ?string
    {
        return $this->arGarantie;
    }

    public function setArGarantie(?string $arGarantie): self
    {
        $this->arGarantie = $arGarantie;

        return $this;
    }

    public function getArDelais(): ?string
    {
        return $this->arDelais;
    }

    public function setArDelais(?string $arDelais): self
    {
        $this->arDelais = $arDelais;

        return $this;
    }

    public function getArDelaip(): ?string
    {
        return $this->arDelaip;
    }

    public function setArDelaip(?string $arDelaip): self
    {
        $this->arDelaip = $arDelaip;

        return $this;
    }

    public function getArComp(): ?string
    {
        return $this->arComp;
    }

    public function setArComp(?string $arComp): self
    {
        $this->arComp = $arComp;

        return $this;
    }
    
    
    public function getArPhoto()
    {
      
     return $this->arPhoto;
    } 

    public function setArPhoto(?string $arPhoto): self
    {
        $this->arPhoto = $arPhoto;

        return $this;
    }

    public function getArPrixloc(): ?string
    {
        return $this->arPrixloc;
    }

    public function setArPrixloc(?string $arPrixloc): self
    {
        $this->arPrixloc = $arPrixloc;

        return $this;
    }

    public function getArPrixvente(): ?string
    {
        return $this->arPrixvente;
    }

    public function setArPrixvente(?string $arPrixvente): self
    {
        $this->arPrixvente = $arPrixvente;

        return $this;
    }

    public function getArNomencl(): ?int
    {
        return $this->arNomencl;
    }

    public function setArNomencl(?int $arNomencl): self
    {
        $this->arNomencl = $arNomencl;

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

    public function getArPublier(): ?int
    {
        return $this->arPublier;
    }

    public function setArPublier(?int $arPublier): self
    {
        $this->arPublier = $arPublier;

        return $this;
    }

    public function getArImprimer(): ?int
    {
        return $this->arImprimer;
    }

    public function setArImprimer(?int $arImprimer): self
    {
        $this->arImprimer = $arImprimer;

        return $this;
    }

    public function getArParmetrage(): ?int
    {
        return $this->arParmetrage;
    }

    public function setArParmetrage(?int $arParmetrage): self
    {
        $this->arParmetrage = $arParmetrage;

        return $this;
    }

    public function getArParpoids(): ?int
    {
        return $this->arParpoids;
    }

    public function setArParpoids(?int $arParpoids): self
    {
        $this->arParpoids = $arParpoids;

        return $this;
    }

    public function getArHauteur(): ?string
    {
        return $this->arHauteur;
    }

    public function setArHauteur(?string $arHauteur): self
    {
        $this->arHauteur = $arHauteur;

        return $this;
    }

    public function getArLongueur(): ?string
    {
        return $this->arLongueur;
    }

    public function setArLongueur(?string $arLongueur): self
    {
        $this->arLongueur = $arLongueur;

        return $this;
    }

    public function getArLargeur(): ?string
    {
        return $this->arLargeur;
    }

    public function setArLargeur(?string $arLargeur): self
    {
        $this->arLargeur = $arLargeur;

        return $this;
    }

    public function getArPoidsnet(): ?string
    {
        return $this->arPoidsnet;
    }

    public function setArPoidsnet(?string $arPoidsnet): self
    {
        $this->arPoidsnet = $arPoidsnet;

        return $this;
    }

    public function getArPoidsbrut(): ?string
    {
        return $this->arPoidsbrut;
    }

    public function setArPoidsbrut(?string $arPoidsbrut): self
    {
        $this->arPoidsbrut = $arPoidsbrut;

        return $this;
    }

    public function getArLier(): ?int
    {
        return $this->arLier;
    }

    public function setArLier(?int $arLier): self
    {
        $this->arLier = $arLier;

        return $this;
    }

    public function getArPrixartlier(): ?int
    {
        return $this->arPrixartlier;
    }

    public function setArPrixartlier(?int $arPrixartlier): self
    {
        $this->arPrixartlier = $arPrixartlier;

        return $this;
    }

    public function getArUnitelier(): ?string
    {
        return $this->arUnitelier;
    }

    public function setArUnitelier(?string $arUnitelier): self
    {
        $this->arUnitelier = $arUnitelier;

        return $this;
    }

    public function getArAssistance(): ?bool
    {
        return $this->arAssistance;
    }

    public function setArAssistance(?bool $arAssistance): self
    {
        $this->arAssistance = $arAssistance;

        return $this;
    }

    public function getArDescassitance(): ?string
    {
        return $this->arDescassitance;
    }

    public function setArDescassitance(?string $arDescassitance): self
    {
        $this->arDescassitance = $arDescassitance;

        return $this;
    }

    public function getArSuivitretour(): ?int
    {
        return $this->arSuivitretour;
    }

    public function setArSuivitretour(?int $arSuivitretour): self
    {
        $this->arSuivitretour = $arSuivitretour;

        return $this;
    }

    public function getArNature(): ?string
    {
        return $this->arNature;
    }

    public function setArNature(?string $arNature): self
    {
        $this->arNature = $arNature;

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

    public function getArHorsstat(): ?int
    {
        return $this->arHorsstat;
    }

    public function setArHorsstat(?int $arHorsstat): self
    {
        $this->arHorsstat = $arHorsstat;

        return $this;
    }

    public function getArParzone(): ?int
    {
        return $this->arParzone;
    }

    public function setArParzone(?int $arParzone): self
    {
        $this->arParzone = $arParzone;

        return $this;
    }

    public function getProductionJournaliere(): ?string
    {
        return $this->productionJournaliere;
    }

    public function setProductionJournaliere(?string $productionJournaliere): self
    {
        $this->productionJournaliere = $productionJournaliere;

        return $this;
    }


}
