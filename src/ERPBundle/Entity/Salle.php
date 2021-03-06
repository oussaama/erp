<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="dateAjoute", type="datetime")
     */
    private $dateAjoute;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="salle")
     */
    private $examen;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="salle")
     * @ORM\JoinColumn(name="Etablissement", referencedColumnName="id")
     */
    private $Etablissement;

    public function __construct()
    {
        $this->dateAjoute= new \DateTime();
        $this->enabled = 0;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Salle
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
     * Set dateAjoute
     *
     * @param \DateTime $dateAjoute
     *
     * @return Salle
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Salle
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
     * Add examan
     *
     * @param \ERPBundle\Entity\Examen $examan
     *
     * @return Salle
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
     * Set etablissement
     *
     * @param \ERPBundle\Entity\Etablissement $etablissement
     *
     * @return Salle
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
}
