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
}
