<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annee
 *
 * @ORM\Table(name="annee")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\AnneeRepository")
 */
class Annee
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
     * @var int
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var \Date
     *
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     */
    private $dateAjout;

    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="annee")
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="annee")
     * @ORM\JoinColumn(name="etablissment", referencedColumnName="id")
     */
    private $Etablissement;

    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="annee")
     */
    private $classe;

    /**
     * @ORM\OneToMany(targetEntity="UniteEnseignement", mappedBy="annee")
     */
    private $unite;

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
     * Set annee
     *
     * @param integer $annee
     *
     * @return Annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateAjout = new \DateTime();
        $this->enabled= 1;
    }

    /**
     * Add etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Annee
     */
    public function addEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant[] = $etudiant;

        return $this;
    }

    /**
     * Remove etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     */
    public function removeEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant->removeElement($etudiant);
    }

    /**
     * Get etudiant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Annee
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Annee
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Annee
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Annee
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set etablissement
     *
     * @param \ERPBundle\Entity\Etablissement $etablissement
     *
     * @return Annee
     */
    public function setEtablissement(\ERPBundle\Entity\Etablissement $etablissement = null)
    {
        $this->Etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \ERPBundle\Entity\Etablissement
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }

    /**
     * Add classe
     *
     * @param \ERPBundle\Entity\Classe $classe
     *
     * @return Annee
     */
    public function addClasse(\ERPBundle\Entity\Classe $classe)
    {
        $this->classe[] = $classe;

        return $this;
    }

    /**
     * Remove classe
     *
     * @param \ERPBundle\Entity\Classe $classe
     */
    public function removeClasse(\ERPBundle\Entity\Classe $classe)
    {
        $this->classe->removeElement($classe);
    }

    /**
     * Get classe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Add unite
     *
     * @param \ERPBundle\Entity\UniteEnseignement $unite
     *
     * @return Annee
     */
    public function addUnite(\ERPBundle\Entity\UniteEnseignement $unite)
    {
        $this->unite[] = $unite;

        return $this;
    }

    /**
     * Remove unite
     *
     * @param \ERPBundle\Entity\UniteEnseignement $unite
     */
    public function removeUnite(\ERPBundle\Entity\UniteEnseignement $unite)
    {
        $this->unite->removeElement($unite);
    }

    /**
     * Get unite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUnite()
    {
        return $this->unite;
    }
}
