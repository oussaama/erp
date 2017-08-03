<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 * @UniqueEntity(fields = "username", targetClass = "ERPBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "ERPBundle\Entity\User", message="fos_user.email.already_used")
 */
class Entreprise extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="entreprise")
     * @ORM\JoinColumn(name="etablissment", referencedColumnName="id")
     */
    private $Etablissement;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long."
     * )
     * @ORM\Column(name="fullName", type="string", length=255)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="directeur", type="string", length=255)
     */
    private $directeur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer" )
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255)
     */
    private $domaine;


    public function __construct()
    {
        parent::__construct();
        $this->setEnabled(1);
        $this->addRole("ROLE_ENTREPRISE");

    }

    /**
     * Set idEtablissement
     *
     * @param \ERPBundle\Entity\Etablissement $Etablissement
     *
     * @return Admin
     */
    public function setEtablissement(\ERPBundle\Entity\Etablissement $Etablissement = null)
    {
        $this->Etablissement = $Etablissement;

        return $this;
    }

    /**
     * Get idEtablissement
     *
     * @return \ERPBundle\Entity\Etablissement
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Employee
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Employee
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Employee
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Employee
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Employee
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Employee
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Employee
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Employee
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    

    /**
     * Set salaire
     *
     * @param float $salaire
     *
     * @return Employee
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Add etablissementE
     *
     * @param \ERPBundle\Entity\Etablissement $etablissementE
     *
     * @return Employee
     */
    public function addEtablissementE(\ERPBundle\Entity\Etablissement $etablissementE)
    {
        $this->EtablissementE[] = $etablissementE;

        return $this;
    }

    /**
     * Remove etablissementE
     *
     * @param \ERPBundle\Entity\Etablissement $etablissementE
     */
    public function removeEtablissementE(\ERPBundle\Entity\Etablissement $etablissementE)
    {
        $this->EtablissementE->removeElement($etablissementE);
    }

    /**
     * Get etablissementE
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissementE()
    {
        return $this->EtablissementE;
    }

    /**
     * Set etablissementE
     *
     * @param \ERPBundle\Entity\Employee $etablissementE
     *
     * @return Employee
     */
    public function setEtablissementE(\ERPBundle\Entity\Employee $etablissementE = null)
    {
        $this->EtablissementE = $etablissementE;

        return $this;
    }

    /**
     * Set spetialite
     *
     * @param string $spetialite
     *
     * @return Enseignant
     */
    public function setSpetialite($spetialite)
    {
        $this->spetialite = $spetialite;

        return $this;
    }

    /**
     * Get spetialite
     *
     * @return string
     */
    public function getSpetialite()
    {
        return $this->spetialite;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return Enseignant
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Entreprise
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set directeur
     *
     * @param string $directeur
     *
     * @return Entreprise
     */
    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return string
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }
}
