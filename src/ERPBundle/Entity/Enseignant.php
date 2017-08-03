<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="enseignant")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\EnseignantRepository")
 * @UniqueEntity(fields = "username", targetClass = "ERPBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "ERPBundle\Entity\User", message="fos_user.email.already_used")
 */
class Enseignant extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="enseignant")
     * @ORM\JoinColumn(name="etablissment", referencedColumnName="id")
     */
    private $Etablissement;

    /**
     * @ORM\OneToMany(targetEntity="Emploi", mappedBy="enseignant")
     */
    private $emploi;

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
     * @ORM\Column(name="cin", type="string", length=255,unique=true)
     */
    private $cin;

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
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="enseignant",cascade={"persist"})
     * @ORM\JoinColumn(name="pays", referencedColumnName="id")
     */
    private $pays;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer",unique=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @ORM\OneToMany(targetEntity="Cour", mappedBy="enseignant")
     */
    private $cour;

    /**
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="enseignant")
     */
    private $examen;

    /**
     * @ORM\OneToMany(targetEntity="Appsense", mappedBy="enseignant")
     */
    private $appsense;


    public function __construct()
    {
        parent::__construct();
        $this->setEnabled(1);
        $this->addRole("ROLE_ENSEIGNANT");

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
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Enseignant
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Add enseignant
     *
     * @param \ERPBundle\Entity\Cour $enseignant
     *
     * @return Enseignant
     */
    public function addEnseignant(\ERPBundle\Entity\Cour $enseignant)
    {
        $this->enseignant[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \ERPBundle\Entity\Cour $enseignant
     */
    public function removeEnseignant(\ERPBundle\Entity\Cour $enseignant)
    {
        $this->enseignant->removeElement($enseignant);
    }

    /**
     * Get enseignant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Add cour
     *
     * @param \ERPBundle\Entity\Cour $cour
     *
     * @return Enseignant
     */
    public function addCour(\ERPBundle\Entity\Cour $cour)
    {
        $this->cour[] = $cour;

        return $this;
    }

    /**
     * Remove cour
     *
     * @param \ERPBundle\Entity\Cour $cour
     */
    public function removeCour(\ERPBundle\Entity\Cour $cour)
    {
        $this->cour->removeElement($cour);
    }

    /**
     * Get cour
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCour()
    {
        return $this->cour;
    }

    /**
     * Add examan
     *
     * @param \ERPBundle\Entity\Examen $examan
     *
     * @return Enseignant
     */
    public function addExaman(\ERPBundle\Entity\Examen $examan)
    {
        $this->examen[] = $examan;

        return $this;
    }

    /**
     * Remove examan
     *
     * @param \ERPBundle\Entity\Examen $examan
     */
    public function removeExaman(\ERPBundle\Entity\Examen $examan)
    {
        $this->examen->removeElement($examan);
    }

    /**
     * Get examen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExamen()
    {
        return $this->examen;
    }

    /**
     * Add emploi
     *
     * @param \ERPBundle\Entity\Emploi $emploi
     *
     * @return Enseignant
     */
    public function addEmploi(\ERPBundle\Entity\Emploi $emploi)
    {
        $this->emploi[] = $emploi;

        return $this;
    }

    /**
     * Remove emploi
     *
     * @param \ERPBundle\Entity\Emploi $emploi
     */
    public function removeEmploi(\ERPBundle\Entity\Emploi $emploi)
    {
        $this->emploi->removeElement($emploi);
    }

    /**
     * Get emploi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmploi()
    {
        return $this->emploi;
    }
}
