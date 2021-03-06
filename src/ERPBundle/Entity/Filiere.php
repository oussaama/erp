<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table(name="filiere")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\FiliereRepository")
 */
class Filiere
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
     * @ORM\Column(name="filiere", type="string", length=255)
     */
    private $filiere;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @ORM\OneToMany(targetEntity="Specialite", mappedBy="filiere")
     */
    private $specialite;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement" , inversedBy="filiere")
     * @ORM\JoinColumn(name="Etablissement" , referencedColumnName="id")
     */
    private $Etablissement;

    /**
     * @ORM\ManyToOne(targetEntity="Diplome", inversedBy="filiere",cascade={"persist"})
     * @ORM\JoinColumn(name="diplome", referencedColumnName="id")
     */
    private $diplome;

    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="filiere")
     */
    private $etudiant;


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
     * Set filiere
     *
     * @param string $filiere
     *
     * @return Filiere
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string
     */
    public function getFiliere()
    {
        return $this->filiere;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enabled = 1;
    }

    /**
     * Add etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Filiere
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Filiere
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
     * Set specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     *
     * @return Filiere
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
     * Set etablissement
     *
     * @param \ERPBundle\Entity\Etablissement $etablissement
     *
     * @return Filiere
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
     * Add niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     *
     * @return Filiere
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
     * Add diplome
     *
     * @param \ERPBundle\Entity\Diplome $diplome
     *
     * @return Filiere
     */
    public function addDiplome(\ERPBundle\Entity\Diplome $diplome)
    {
        $this->diplome[] = $diplome;

        return $this;
    }

    /**
     * Remove diplome
     *
     * @param \ERPBundle\Entity\Diplome $diplome
     */
    public function removeDiplome(\ERPBundle\Entity\Diplome $diplome)
    {
        $this->diplome->removeElement($diplome);
    }

    /**
     * Get diplome
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Add specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     *
     * @return Filiere
     */
    public function addSpecialite(\ERPBundle\Entity\Specialite $specialite)
    {
        $this->specialite[] = $specialite;

        return $this;
    }

    /**
     * Remove specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     */
    public function removeSpecialite(\ERPBundle\Entity\Specialite $specialite)
    {
        $this->specialite->removeElement($specialite);
    }

    /**
     * Set diplome
     *
     * @param \ERPBundle\Entity\Diplome $diplome
     *
     * @return Filiere
     */
    public function setDiplome(\ERPBundle\Entity\Diplome $diplome = null)
    {
        $this->diplome = $diplome;

        return $this;
    }
}
