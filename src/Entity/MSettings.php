<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MSettings
 *
 * @ORM\Table(name="M_SETTINGS")
 * @ORM\Entity
 */
class MSettings
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="ID_USER", type="string", length=50, nullable=true)
     */
    private $idUser;

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
     * @var int|null
     *
     * @ORM\Column(name="DO_Etat", type="smallint", nullable=true)
     */
    private $doEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Statut", type="string", length=50, nullable=true)
     */
    private $doStatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_StatutValidation", type="string", length=50, nullable=true)
     */
    private $doStatutvalidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_StatutAnnulation", type="string", length=50, nullable=true)
     */
    private $doStatutannulation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Recouvreur", type="string", length=50, nullable=true)
     */
    private $doRecouvreur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DO_Commercial", type="string", length=50, nullable=true)
     */
    private $doCommercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SendMail", type="string", length=0, nullable=true)
     */
    private $sendmail;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMarq", type="integer", nullable=false, options={"comment"="ID unique"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbmarq;

    /**
     * @var string
     *
     * @ORM\Column(name="cbCreateur", type="string", length=50, nullable=false, options={"default"="CSQL","comment"="Createur (Utilisateur)"})
     */
    private $cbcreateur = 'CSQL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cbModification", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Date de modification"})
     */
    private $cbmodification = 'CURRENT_TIMESTAMP';

    public function getIdUser(): ?string
    {
        return $this->idUser;
    }

    public function setIdUser(?string $idUser): self
    {
        $this->idUser = $idUser;

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

    public function getDoEtat(): ?int
    {
        return $this->doEtat;
    }

    public function setDoEtat(?int $doEtat): self
    {
        $this->doEtat = $doEtat;

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

    public function getDoStatutvalidation(): ?string
    {
        return $this->doStatutvalidation;
    }

    public function setDoStatutvalidation(?string $doStatutvalidation): self
    {
        $this->doStatutvalidation = $doStatutvalidation;

        return $this;
    }

    public function getDoStatutannulation(): ?string
    {
        return $this->doStatutannulation;
    }

    public function setDoStatutannulation(?string $doStatutannulation): self
    {
        $this->doStatutannulation = $doStatutannulation;

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

    public function getDoCommercial(): ?string
    {
        return $this->doCommercial;
    }

    public function setDoCommercial(?string $doCommercial): self
    {
        $this->doCommercial = $doCommercial;

        return $this;
    }

    public function getSendmail(): ?string
    {
        return $this->sendmail;
    }

    public function setSendmail(?string $sendmail): self
    {
        $this->sendmail = $sendmail;

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

    public function setCbcreateur(string $cbcreateur): self
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(\DateTimeInterface $cbmodification): self
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }


}
