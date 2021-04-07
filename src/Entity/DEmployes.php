<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DEmployes
 *
 * @ORM\Table(name="D_EMPLOYES", uniqueConstraints={@ORM\UniqueConstraint(name="UK_EM_Code", columns={"EM_Code"})})
 * @ORM\Entity
 */
class DEmployes
{
    /**
     * @var string
     *
     * @ORM\Column(name="EM_Code", type="string", length=50, nullable=false)
     */
    private $emCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Prenom", type="string", length=50, nullable=true)
     */
    private $emPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Nom", type="string", length=50, nullable=true)
     */
    private $emNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Fonction", type="string", length=50, nullable=true)
     */
    private $emFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CoutStd", type="decimal", precision=24, scale=6, nullable=true)
     */
    private $emCoutstd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeResp", type="string", length=50, nullable=true)
     */
    private $emCoderesp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Code", type="string", length=50, nullable=true)
     */
    private $ccCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EM_Collaborateur", type="smallint", nullable=true)
     */
    private $emCollaborateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="EM_DateCreation", type="datetime", nullable=true)
     */
    private $emDatecreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodeExterne", type="string", length=50, nullable=true)
     */
    private $emCodeexterne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Adresse", type="string", length=50, nullable=true)
     */
    private $emAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CodePostal", type="string", length=50, nullable=true)
     */
    private $emCodepostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Ville", type="string", length=50, nullable=true)
     */
    private $emVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Region", type="string", length=50, nullable=true)
     */
    private $emRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Pays", type="string", length=50, nullable=true)
     */
    private $emPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_EMail", type="string", length=50, nullable=true)
     */
    private $emEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Unite", type="string", length=50, nullable=true)
     */
    private $emUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_CIN", type="string", length=50, nullable=true)
     */
    private $emCin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="EM_Naissance", type="datetime", nullable=true)
     */
    private $emNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Tel", type="string", length=50, nullable=true)
     */
    private $emTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Tel_Fix", type="string", length=50, nullable=true)
     */
    private $emTelFix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_GSM", type="string", length=50, nullable=true)
     */
    private $emGsm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EM_Qualification", type="string", length=50, nullable=true)
     */
    private $emQualification;

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
     * @var string|null
     *
     * @ORM\Column(name="EM_Commentaire", type="string", length=500, nullable=true)
     */
    private $emCommentaire;

    public function getEmCode(): ?string
    {
        return $this->emCode;
    }

    public function setEmCode(string $emCode): self
    {
        $this->emCode = $emCode;

        return $this;
    }

    public function getEmPrenom(): ?string
    {
        return $this->emPrenom;
    }

    public function setEmPrenom(?string $emPrenom): self
    {
        $this->emPrenom = $emPrenom;

        return $this;
    }

    public function getEmNom(): ?string
    {
        return $this->emNom;
    }

    public function setEmNom(?string $emNom): self
    {
        $this->emNom = $emNom;

        return $this;
    }

    public function getEmFonction(): ?string
    {
        return $this->emFonction;
    }

    public function setEmFonction(?string $emFonction): self
    {
        $this->emFonction = $emFonction;

        return $this;
    }

    public function getEmCoutstd(): ?string
    {
        return $this->emCoutstd;
    }

    public function setEmCoutstd(?string $emCoutstd): self
    {
        $this->emCoutstd = $emCoutstd;

        return $this;
    }

    public function getEmCoderesp(): ?string
    {
        return $this->emCoderesp;
    }

    public function setEmCoderesp(?string $emCoderesp): self
    {
        $this->emCoderesp = $emCoderesp;

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

    public function getEmCollaborateur(): ?int
    {
        return $this->emCollaborateur;
    }

    public function setEmCollaborateur(?int $emCollaborateur): self
    {
        $this->emCollaborateur = $emCollaborateur;

        return $this;
    }

    public function getEmDatecreation(): ?\DateTimeInterface
    {
        return $this->emDatecreation;
    }

    public function setEmDatecreation(?\DateTimeInterface $emDatecreation): self
    {
        $this->emDatecreation = $emDatecreation;

        return $this;
    }

    public function getEmCodeexterne(): ?string
    {
        return $this->emCodeexterne;
    }

    public function setEmCodeexterne(?string $emCodeexterne): self
    {
        $this->emCodeexterne = $emCodeexterne;

        return $this;
    }

    public function getEmAdresse(): ?string
    {
        return $this->emAdresse;
    }

    public function setEmAdresse(?string $emAdresse): self
    {
        $this->emAdresse = $emAdresse;

        return $this;
    }

    public function getEmCodepostal(): ?string
    {
        return $this->emCodepostal;
    }

    public function setEmCodepostal(?string $emCodepostal): self
    {
        $this->emCodepostal = $emCodepostal;

        return $this;
    }

    public function getEmVille(): ?string
    {
        return $this->emVille;
    }

    public function setEmVille(?string $emVille): self
    {
        $this->emVille = $emVille;

        return $this;
    }

    public function getEmRegion(): ?string
    {
        return $this->emRegion;
    }

    public function setEmRegion(?string $emRegion): self
    {
        $this->emRegion = $emRegion;

        return $this;
    }

    public function getEmPays(): ?string
    {
        return $this->emPays;
    }

    public function setEmPays(?string $emPays): self
    {
        $this->emPays = $emPays;

        return $this;
    }

    public function getEmEmail(): ?string
    {
        return $this->emEmail;
    }

    public function setEmEmail(?string $emEmail): self
    {
        $this->emEmail = $emEmail;

        return $this;
    }

    public function getEmUnite(): ?string
    {
        return $this->emUnite;
    }

    public function setEmUnite(?string $emUnite): self
    {
        $this->emUnite = $emUnite;

        return $this;
    }

    public function getEmCin(): ?string
    {
        return $this->emCin;
    }

    public function setEmCin(?string $emCin): self
    {
        $this->emCin = $emCin;

        return $this;
    }

    public function getEmNaissance(): ?\DateTimeInterface
    {
        return $this->emNaissance;
    }

    public function setEmNaissance(?\DateTimeInterface $emNaissance): self
    {
        $this->emNaissance = $emNaissance;

        return $this;
    }

    public function getEmTel(): ?string
    {
        return $this->emTel;
    }

    public function setEmTel(?string $emTel): self
    {
        $this->emTel = $emTel;

        return $this;
    }

    public function getEmTelFix(): ?string
    {
        return $this->emTelFix;
    }

    public function setEmTelFix(?string $emTelFix): self
    {
        $this->emTelFix = $emTelFix;

        return $this;
    }

    public function getEmGsm(): ?string
    {
        return $this->emGsm;
    }

    public function setEmGsm(?string $emGsm): self
    {
        $this->emGsm = $emGsm;

        return $this;
    }

    public function getEmQualification(): ?string
    {
        return $this->emQualification;
    }

    public function setEmQualification(?string $emQualification): self
    {
        $this->emQualification = $emQualification;

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

    public function getEmCommentaire(): ?string
    {
        return $this->emCommentaire;
    }

    public function setEmCommentaire(?string $emCommentaire): self
    {
        $this->emCommentaire = $emCommentaire;

        return $this;
    }


}
