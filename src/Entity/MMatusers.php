<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMatusers
 *
 * @ORM\Table(name="M_MATUSERS")
 * @ORM\Entity(repositoryClass="App\Repository\MMatusersRepository")
 */
class MMatusers
{/**
 * @var int
 *
 * @ORM\Column(name="idmatuser", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
private $idmatuser;


    /**
     * @var int
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="M00", type="smallint", nullable=false, options={"comment"="Module Vente"})
     */
    private $m00;

    /**
     * @var int
     *
     * @ORM\Column(name="M01", type="smallint", nullable=false, options={"comment"="Vente: Solvabilité"})
     */
    private $m01;

    /**
     * @var int
     *
     * @ORM\Column(name="M10", type="smallint", nullable=false, options={"comment"="Module Achat"})
     */
    private $m10;

    /**
     * @var int
     *
     * @ORM\Column(name="M02", type="smallint", nullable=false, options={"comment"="Vente: Liste des devis en cours"})
     */
    private $m02;

    /**
     * @var int
     *
     * @ORM\Column(name="M03", type="smallint", nullable=false, options={"comment"="Vente: Validation Devis"})
     */
    private $m03;

    /**
     * @var int
     *
     * @ORM\Column(name="M04", type="smallint", nullable=false, options={"comment"="Vente : Liste des factures"})
     */
    private $m04;

    /**
     * @var int
     *
     * @ORM\Column(name="M05", type="smallint", nullable=false, options={"comment"="Vente :Modification Code Risque"})
     */
    private $m05;

    /**
     * @var int
     *
     * @ORM\Column(name="M06", type="smallint", nullable=false, options={"comment"="Vente:  Modification Encours client"})
     */
    private $m06;

    /**
     * @var int
     *
     * @ORM\Column(name="M07", type="smallint", nullable=false, options={"comment"="Vente: Creation d'un Devis"})
     */
    private $m07;

    /**
     * @var int
     *
     * @ORM\Column(name="M11", type="smallint", nullable=false, options={"comment"="Achat: Demande d'appro."})
     */
    private $m11;

    /**
     * @var int
     *
     * @ORM\Column(name="M12", type="smallint", nullable=false, options={"comment"="Achat: Validatioon demande D'appro."})
     */
    private $m12;

    /**
     * @var int
     *
     * @ORM\Column(name="M13", type="smallint", nullable=false, options={"comment"="Achat: Bordoreaux de paiement"})
     */
    private $m13;

    /**
     * @var int
     *
     * @ORM\Column(name="M20", type="smallint", nullable=false, options={"comment"="Module Trésorerie"})
     */
    private $m20;

    /**
     * @var int
     *
     * @ORM\Column(name="M21", type="smallint", nullable=false, options={"comment"="Trésorrerie Enciassement"})
     */
    private $m21;

    /**
     * @var int
     *
     * @ORM\Column(name="M22", type="smallint", nullable=false, options={"comment"="Trésorerie Décaissement"})
     */
    private $m22;

    /**
     * @var int
     *
     * @ORM\Column(name="M30", type="smallint", nullable=false, options={"comment"="Module Maintenance"})
     */
    private $m30;

    /**
     * @var int
     *
     * @ORM\Column(name="M31", type="smallint", nullable=false, options={"comment"="GMAO: Liste des demandes d'intervention"})
     */
    private $m31;

    /**
     * @var int
     *
     * @ORM\Column(name="M32", type="smallint", nullable=false, options={"comment"="GMAO: Creer une demande d'intervention"})
     */
    private $m32;

    /**
     * @var int
     *
     * @ORM\Column(name="M33", type="smallint", nullable=false, options={"comment"="GMAO: Validation d'une demande d'intervention"})
     */
    private $m33;

    /**
     * @var int
     *
     * @ORM\Column(name="M34", type="smallint", nullable=false, options={"comment"="GMAO: Liste des BT"})
     */
    private $m34;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getM00(): ?int
    {
        return $this->m00;
    }

    public function setM00(int $m00): self
    {
        $this->m00 = $m00;

        return $this;
    }

    public function getM01(): ?int
    {
        return $this->m01;
    }

    public function setM01(int $m01): self
    {
        $this->m01 = $m01;

        return $this;
    }

    public function getM10(): ?int
    {
        return $this->m10;
    }

    public function setM10(int $m10): self
    {
        $this->m10 = $m10;

        return $this;
    }

    public function getM02(): ?int
    {
        return $this->m02;
    }

    public function setM02(int $m02): self
    {
        $this->m02 = $m02;

        return $this;
    }

    public function getM03(): ?int
    {
        return $this->m03;
    }

    public function setM03(int $m03): self
    {
        $this->m03 = $m03;

        return $this;
    }

    public function getM04(): ?int
    {
        return $this->m04;
    }

    public function setM04(int $m04): self
    {
        $this->m04 = $m04;

        return $this;
    }

    public function getM05(): ?int
    {
        return $this->m05;
    }

    public function setM05(int $m05): self
    {
        $this->m05 = $m05;

        return $this;
    }

    public function getM06(): ?int
    {
        return $this->m06;
    }

    public function setM06(int $m06): self
    {
        $this->m06 = $m06;

        return $this;
    }

    public function getM07(): ?int
    {
        return $this->m07;
    }

    public function setM07(int $m07): self
    {
        $this->m07 = $m07;

        return $this;
    }

    public function getM11(): ?int
    {
        return $this->m11;
    }

    public function setM11(int $m11): self
    {
        $this->m11 = $m11;

        return $this;
    }

    public function getM12(): ?int
    {
        return $this->m12;
    }

    public function setM12(int $m12): self
    {
        $this->m12 = $m12;

        return $this;
    }

    public function getM13(): ?int
    {
        return $this->m13;
    }

    public function setM13(int $m13): self
    {
        $this->m13 = $m13;

        return $this;
    }

    public function getM20(): ?int
    {
        return $this->m20;
    }

    public function setM20(int $m20): self
    {
        $this->m20 = $m20;

        return $this;
    }

    public function getM21(): ?int
    {
        return $this->m21;
    }

    public function setM21(int $m21): self
    {
        $this->m21 = $m21;

        return $this;
    }

    public function getM22(): ?int
    {
        return $this->m22;
    }

    public function setM22(int $m22): self
    {
        $this->m22 = $m22;

        return $this;
    }

    public function getM30(): ?int
    {
        return $this->m30;
    }

    public function setM30(int $m30): self
    {
        $this->m30 = $m30;

        return $this;
    }

    public function getM31(): ?int
    {
        return $this->m31;
    }

    public function setM31(int $m31): self
    {
        $this->m31 = $m31;

        return $this;
    }

    public function getM32(): ?int
    {
        return $this->m32;
    }

    public function setM32(int $m32): self
    {
        $this->m32 = $m32;

        return $this;
    }

    public function getM33(): ?int
    {
        return $this->m33;
    }

    public function setM33(int $m33): self
    {
        $this->m33 = $m33;

        return $this;
    }

    public function getM34(): ?int
    {
        return $this->m34;
    }

    public function setM34(int $m34): self
    {
        $this->m34 = $m34;

        return $this;
    }

    public function getIdmatuser(): ?int
    {
        return $this->idmatuser;
    }


}
