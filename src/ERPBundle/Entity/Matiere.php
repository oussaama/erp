<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\MatiereRepository")
 */
class Matiere
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
     * @var string
     *
     * @ORM\Column(name="coef", type="decimal", precision=3, scale=2)
     */
    private $coef;

    /**
     * @var int
     *
     * @ORM\Column(name="credit", type="integer")
     */
    private $credit;

    /**
     * @var string
     *
     * @ORM\Column(name="td", type="decimal", precision=4, scale=2)
     */
    private $td;

    /**
     * @var string
     *
     * @ORM\Column(name="tp", type="decimal", precision=4, scale=2)
     */
    private $tp;

    /**
     * @var string
     *
     * @ORM\Column(name="cours", type="decimal", precision=4, scale=2)
     */
    private $cours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjoute", type="datetime")
     */
    private $dateAjoute;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="datetime")
     */
    private $dateModif;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="regime", type="boolean")
     */
    private $regime;

    /**
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="matiere")
     */
    private $examen;

    /**
     * @ORM\ManyToOne(targetEntity="UniteEnseignement", inversedBy="matiere")
     * @ORM\JoinColumn(name="unite", referencedColumnName="id")
     */
    private $unite;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="matiere")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="Niveau", inversedBy="matiere")
     * @ORM\JoinColumn(name="niveau", referencedColumnName="id")
     */
    private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity="Specialite", inversedBy="matiere")
     * @ORM\JoinColumn(name="specialite", referencedColumnName="id")
     */
    private $specialite;

    /**
     * @ORM\OneToMany(targetEntity="Cour", mappedBy="matiere")
     */
    private $cour;

    /**
     * @ORM\OneToMany(targetEntity="Appsense", mappedBy="matiere")
     */
    private $appsense;



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
     * @return Matiere
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
     * Set coef
     *
     * @param string $coef
     *
     * @return Matiere
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;

        return $this;
    }

    /**
     * Get coef
     *
     * @return string
     */
    public function getCoef()
    {
        return $this->coef;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     *
     * @return Matiere
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return int
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set td
     *
     * @param string $td
     *
     * @return Matiere
     */
    public function setTd($td)
    {
        $this->td = $td;

        return $this;
    }

    /**
     * Get td
     *
     * @return string
     */
    public function getTd()
    {
        return $this->td;
    }

    /**
     * Set tp
     *
     * @param string $tp
     *
     * @return Matiere
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return string
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set cours
     *
     * @param string $cours
     *
     * @return Matiere
     */
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return string
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set dateAjoute
     *
     * @param \DateTime $dateAjoute
     *
     * @return Matiere
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
     * @return Matiere
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Matiere
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set unite
     *
     * @param \ERPBundle\Entity\UniteEnseignement $unite
     *
     * @return Matiere
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cour = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cour
     *
     * @param \ERPBundle\Entity\Cour $cour
     *
     * @return Matiere
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
     * Add appsense
     *
     * @param \ERPBundle\Entity\Appsense $appsense
     *
     * @return Matiere
     */
    public function addAppsense(\ERPBundle\Entity\Appsense $appsense)
    {
        $this->appsense[] = $appsense;

        return $this;
    }

    /**
     * Remove appsense
     *
     * @param \ERPBundle\Entity\Appsense $appsense
     */
    public function removeAppsense(\ERPBundle\Entity\Appsense $appsense)
    {
        $this->appsense->removeElement($appsense);
    }

    /**
     * Get appsense
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAppsense()
    {
        return $this->appsense;
    }

    /**
     * Set niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     *
     * @return Matiere
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

    /**
     * Set specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     *
     * @return Matiere
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
     * Add note
     *
     * @param \ERPBundle\Entity\Note $note
     *
     * @return Matiere
     */
    public function addNote(\ERPBundle\Entity\Note $note)
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \ERPBundle\Entity\Note $note
     */
    public function removeNote(\ERPBundle\Entity\Note $note)
    {
        $this->note->removeElement($note);
    }

    /**
     * Get note
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add examan
     *
     * @param \ERPBundle\Entity\Examen $examan
     *
     * @return Matiere
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
     * Set regime
     *
     * @param boolean $regime
     *
     * @return Matiere
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return boolean
     */
    public function getRegime()
    {
        return $this->regime;
    }
}
