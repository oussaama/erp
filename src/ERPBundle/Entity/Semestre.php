<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semestre
 *
 * @ORM\Table(name="semestre")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\SemestreRepository")
 */
class Semestre
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="semestre")
     */
    private $note;

    /**
     * @ORM\OneToMany(targetEntity="UniteEnseignement", mappedBy="semestre")
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Semestre
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Semestre
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Constructor
     */
    public function __construct()
    {
        $this->note = new \Doctrine\Common\Collections\ArrayCollection();
        $this->unite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add unite
     *
     * @param \ERPBundle\Entity\UniteEnseignement $unite
     *
     * @return Semestre
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
