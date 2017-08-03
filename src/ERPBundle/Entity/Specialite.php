<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\SpecialiteRepository")
 */
class Specialite
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
     * @var string
     *
     * @ORM\Column(name="nomSpecialite", type="string", length=255)
     */
    private $nomSpecialite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAjoute", type="datetime")
     */
    private $dateAjoute;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModif", type="datetime")
     */
    private $dateModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="specialite")
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="specialite")
     * @ORM\JoinColumn(name="Etablissement", referencedColumnName="id")
     */
    private $Etablissement;

    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="classe")
     */
    private $classe;

    /**
     * @ORM\ManyToOne(targetEntity="Filiere", inversedBy="specialite")
     * @ORM\JoinColumn(name="filiere", referencedColumnName="id")
     */
    private $filiere;

    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="specialite")
     */
    private $etudiant;

    /**
     * @ORM\OneToMany(targetEntity="Niveau", mappedBy="specialite")
     */
    private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity="UniteEnseignement", cascade={"persist"})
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
     * Set nomSpecialite
     *
     * @param string $nomSpecialite
     *
     * @return Specialite
     */
    public function setNomSpecialite($nomSpecialite)
    {
        $this->nomSpecialite = $nomSpecialite;

        return $this;
    }

    /**
     * Get nomSpecialite
     *
     * @return string
     */
    public function getNomSpecialite()
    {
        return $this->nomSpecialite;
    }

    /**
     * Set dateAjoute
     *
     * @param \DateTime $dateAjoute
     *
     * @return Specialite
     */
    public function setDateAjoute($dateAjoute)
    {
        $this->dateAjoute = $dateAjoute;

        return $this;
    }

    /**
     * Get dateAjoute
     *
     * @return \DateTime
     */
    public function getDateAjoute()
    {
        return $this->dateAjoute;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Specialite
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateAjoute = new \DateTime();
        $this->dateModif = new \DateTime();
        $this->enabled = 1;
    }

    /**
     * Add classe
     *
     * @param \ERPBundle\Entity\Classe $classe
     *
     * @return Specialite
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
     * Add filiere
     *
     * @param \ERPBundle\Entity\Filiere $filiere
     *
     * @return Specialite
     */
    public function addFiliere(\ERPBundle\Entity\Filiere $filiere)
    {
        $this->filiere[] = $filiere;

        return $this;
    }

    /**
     * Remove filiere
     *
     * @param \ERPBundle\Entity\Filiere $filiere
     */
    public function removeFiliere(\ERPBundle\Entity\Filiere $filiere)
    {
        $this->filiere->removeElement($filiere);
    }

    /**
     * Get filiere
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiliere()
    {
        return $this->filiere;
    }
    

    /**
     * Set etablissement
     *
     * @param \ERPBundle\Entity\Etablissement $etablissement
     *
     * @return Specialite
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Specialite
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
     * Add etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Specialite
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
     * Add matiere
     *
     * @param \ERPBundle\Entity\Matiere $matiere
     *
     * @return Specialite
     */
    public function addMatiere(\ERPBundle\Entity\Matiere $matiere)
    {
        $this->matiere[] = $matiere;

        return $this;
    }

    /**
     * Remove matiere
     *
     * @param \ERPBundle\Entity\Matiere $matiere
     */
    public function removeMatiere(\ERPBundle\Entity\Matiere $matiere)
    {
        $this->matiere->removeElement($matiere);
    }

    /**
     * Get matiere
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set filiere
     *
     * @param \ERPBundle\Entity\Filiere $filiere
     *
     * @return Specialite
     */
    public function setFiliere(\ERPBundle\Entity\Filiere $filiere = null)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Add niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     *
     * @return Specialite
     */
    public function addNiveau(\ERPBundle\Entity\Niveau $niveau)
    {
        $this->niveau[] = $niveau;

        return $this;
    }

    /**
     * Remove niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     */
    public function removeNiveau(\ERPBundle\Entity\Niveau $niveau)
    {
        $this->niveau->removeElement($niveau);
    }

    /**
     * Get niveau
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set unite
     *
     * @param \ERPBundle\Entity\UniteEnseignement $unite
     *
     * @return Specialite
     */
    public function setUnite(\ERPBundle\Entity\UniteEnseignement $unite = null)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return \ERPBundle\Entity\UniteEnseignement
     */
    public function getUnite()
    {
        return $this->unite;
    }
}
