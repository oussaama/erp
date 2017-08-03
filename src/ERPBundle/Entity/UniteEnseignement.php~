<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniteEnseignement
 *
 * @ORM\Table(name="unite_enseignement")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\UniteEnseignementRepository")
 */
class UniteEnseignement
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="unite")
     * @ORM\JoinColumn(name="etablissment", referencedColumnName="id")
     */
    private $etablissement;

    /**
     * @ORM\ManyToOne(targetEntity="Annee", inversedBy="unite")
     * @ORM\JoinColumn(name="annee", referencedColumnName="id")
     */
    private $annee;

    /**
     * @ORM\ManyToOne(targetEntity="Semestre", inversedBy="unite")
     * @ORM\JoinColumn(name="semestre", referencedColumnName="id")
     */
    private $semestre;

    /**
     * @ORM\ManyToOne(targetEntity="Niveau", inversedBy="unite")
     * @ORM\JoinColumn(name="niveau", referencedColumnName="id")
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="unite")
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="Specialite", inversedBy="unite")
     * @ORM\JoinColumn(name="specialite", referencedColumnName="id")
     */
    private $specialite;
    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean",options={"default" = 1})
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjoute", type="datetime")
     */
    private $dateAjoute;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="datetime", length=255)
     */
    private $dateModif;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return UniteEnseignement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set classe
     *
     * @param integer $classe
     *
     * @return UniteEnseignement
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return int
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     *
     * @return UniteEnseignement
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return int
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set etablissment
     *
     * @param \ERPBundle\Entity\Etablissement $etablissment
     *
     * @return UniteEnseignement
     */
    public function setEtablissement(\ERPBundle\Entity\Etablissement $etablissment = null)
    {
        $this->etablissement = $etablissment;

        return $this;
    }

    /**
     * Get etablissment
     *
     * @return \ERPBundle\Entity\Etablissement
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     *
     * @return UniteEnseignement
     */
    public function setSpecialite(\ERPBundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \ERPBundle\Entity\Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return UniteEnseignement
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
     * Set dateAjoute
     *
     * @param \DateTime $dateAjoute
     *
     * @return UniteEnseignement
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
     * @return UniteEnseignement
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
        $this->matiere = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add matiere
     *
     * @param \ERPBundle\Entity\Matiere $matiere
     *
     * @return UniteEnseignement
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
     * Set annee
     *
     * @param \ERPBundle\Entity\Annee $annee
     *
     * @return UniteEnseignement
     */
    public function setAnnee(\ERPBundle\Entity\Annee $annee = null)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \ERPBundle\Entity\Annee
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     *
     * @return UniteEnseignement
     */
    public function setNiveau(\ERPBundle\Entity\Niveau $niveau = null)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \ERPBundle\Entity\Niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
