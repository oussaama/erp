<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\ExamenRepository")
 */
class Examen
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExamen", type="datetime",nullable=true)
     */
    private $dateExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255,nullable=true)
     */
    private $duree;

    /**
     * @ORM\ManyToOne(targetEntity="Classe", inversedBy="examen")
     * @ORM\JoinColumn(name="classe", referencedColumnName="id")
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Enseignant", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     * @ORM\JoinTable(name="examens_enseignants")
     */
    protected $enseignants;

    /**
     * @ORM\ManyToOne(targetEntity="Salle", inversedBy="examen")
     * @ORM\JoinColumn(name="salle", referencedColumnName="id")
     */
    private $salle;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="examen")
     * @ORM\JoinColumn(name="matiere", referencedColumnName="id")
     */
    private $matiere;


    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="examen", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    protected $notes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="qualified", type="boolean")
     */
    private $qualified;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->qualified= 0;
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set type
     *
     * @param string $type
     *
     * @return Examen
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Examen
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Examen
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set classe
     *
     * @param \ERPBundle\Entity\Classe $classe
     *
     * @return Examen
     */
    public function setClasse(\ERPBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \ERPBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     *
     * @return Examen
     */
    public function setAuteur(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignants[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     */
    public function removeAuteur(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignants->removeElement($enseignant);
    }

    /**
     * Get enseignant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignants()
    {
        return $this->enseignants;
    }


    /**
     * Set dateExamen
     *
     * @param \DateTime $dateExamen
     *
     * @return Examen
     */
    public function setDateExamen($dateExamen)
    {
        $this->dateExamen = $dateExamen;

        return $this;
    }

    /**
     * Get dateExamen
     *
     * @return \DateTime
     */
    public function getDateExamen()
    {
        return $this->dateExamen;
    }

    /**
     * Set salle
     *
     * @param \ERPBundle\Entity\Salle $salle
     *
     * @return Examen
     */
    public function setSalle(\ERPBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \ERPBundle\Entity\Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    public function __toString() {
        return $this->classe;
    }

    /**
     * @return int
     */
    public function getQualified()
    {
        return $this->qualified;
    }

    /**
     * @param int $qualified
     */
    public function setQualified($qualified)
    {
        $this->qualified = $qualified;
    }



    /**
     * Set matiere
     *
     * @param \ERPBundle\Entity\Matiere $matiere
     *
     * @return Examen
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


    public function getNotes()
    {
        return $this->notes->toArray();
    }

    public function addNote(Note $note)
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setExam($this);
        }

        return $this;
    }

    public function removeJob(Note $note)
    {
        if ($this->notes->contains($note)) {
            $this->notes->removeElement($note);
            $note->setExam(null);
        }

        return $this;
    }






    /**
     * Set description
     *
     * @param string $description
     *
     * @return Examen
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     *
     * @return Examen
     */
    public function addEnseignant(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignants[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     */
    public function removeEnseignant(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignants->removeElement($enseignant);
    }

    /**
     * Remove note
     *
     * @param \ERPBundle\Entity\Note $note
     */
    public function removeNote(\ERPBundle\Entity\Note $note)
    {
        $this->notes->removeElement($note);
    }
}
