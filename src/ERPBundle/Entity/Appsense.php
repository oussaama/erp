<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appsense
 *
 * @ORM\Table(name="appsense")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\AppsenseRepository")
 */
class Appsense
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tp", type="boolean")
     */
    private $tp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="td", type="boolean")
     */
    private $td;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cour", type="boolean")
     */
    private $cour;

    /**
     * @var boolean
     *
     * @ORM\Column(name="retard", type="boolean")
     */
    private $retard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="present", type="boolean")
     */
    private $present;

    /**
     * @var boolean
     *
     * @ORM\Column(name="absent", type="boolean")
     */
    private $absent;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAppsense", type="datetime")
     */
    private $dateAppsense;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinAppsense", type="datetime")
     */
    private $dateFinAppsense;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="appsense")
     * @ORM\JoinColumn(name="etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity="Enseignant", inversedBy="appsense")
     * @ORM\JoinColumn(name="enseignant", referencedColumnName="id")
     */
    private $enseignant;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="appsense")
     * @ORM\JoinColumn(name="matiere", referencedColumnName="id")
     */
    private $matiere;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateAppsense
     *
     * @param \DateTime $dateAppsense
     *
     * @return Appsense
     */
    public function setDateAppsense($dateAppsense)
    {
        $this->dateAppsense = $dateAppsense;

        return $this;
    }

    /**
     * Get dateAppsense
     *
     * @return \DateTime
     */
    public function getDateAppsense()
    {
        return $this->dateAppsense;
    }


    /**
     * Set dateFinAppsense
     *
     * @param \DateTime $dateFinAppsense
     *
     * @return Appsense
     */
    public function setdateFinAppsense($dateFinAppsense)
    {
        $this->dateFinAppsense = $dateFinAppsense;

        return $this;
    }

    /**
     * Get dateFinAppsense
     *
     * @return \DateTime
     */
    public function getdateFinAppsense()
    {
        return $this->dateFinAppsense;
    }



    /**
     * Set etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Appsense
     */
    public function setEtudiant(\ERPBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \ERPBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     *
     * @return Appsense
     */
    public function setEnseignant(\ERPBundle\Entity\Enseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \ERPBundle\Entity\Enseignant
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set matiere
     *
     * @param \ERPBundle\Entity\Matiere $matiere
     *
     * @return Appsense
     */
    public function setMatiere(\ERPBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \ERPBundle\Entity\Matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @return bool
     */
    public function isTp()
    {
        return $this->tp;
    }

    /**
     * @param bool $tp
     */
    public function setTp($tp)
    {
        $this->tp = $tp;
    }

    /**
     * @return bool
     */
    public function isTd()
    {
        return $this->td;
    }

    /**
     * @param bool $td
     */
    public function setTd($td)
    {
        $this->td = $td;
    }

    /**
     * @return bool
     */
    public function isCour()
    {
        return $this->cour;
    }

    /**
     * @param bool $cour
     */
    public function setCour($cour)
    {
        $this->cour = $cour;
    }

    /**
     * @return mixed
     */
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * @param mixed $retard
     */
    public function setRetard($retard)
    {
        $this->retard = $retard;
    }

    /**
     * @return mixed
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * @param mixed $present
     */
    public function setPresent($present)
    {
        $this->present = $present;
    }

    /**
     * @return mixed
     */
    public function getAbsent()
    {
        return $this->absent;
    }

    /**
     * @param mixed $absent
     */
    public function setAbsent($absent)
    {
        $this->absent = $absent;
    }

}
