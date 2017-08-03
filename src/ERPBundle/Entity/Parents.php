<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="parent")
 * @UniqueEntity(fields = "username", targetClass = "ERPBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "ERPBundle\Entity\User", message="fos_user.email.already_used")
 */
class Parents extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->addRole("ROLE_PARENT");
        $this->setEnabled(1);
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nomPere", type="string", length=255)
     */
    private $nomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="professionPere", type="string", length=255)
     */
    private $professionPere;

    /**
     * @var string
     *
     * @ORM\Column(name="professionMere", type="string", length=255)
     */
    private $professionMere;

    /**
     * @var string
     *
     * @ORM\Column(name="cinPere", type="string", length=255)
     */
    private $cinPere;

    /**
     * @var date
     *
     * @ORM\Column(name="datecinPere", type="date", length=255)
     */
    private $dateCinPere;

    /**
     * @var string
     *
     * @ORM\Column(name="cinMere", type="string", length=255)
     */
    private $cinMere;

    /**
     * @var int
     *
     * @ORM\Column(name="telPere", type="integer")
     */
    private $telPere;

    /**
     * @var string
     *
     * @ORM\Column(name="telMere", type="string", length=255)
     */
    private $telMere;

    /**
     * @var date
     *
     * @ORM\Column(name="delivredPere", type="date")
     */
    private $delivredPere;

    /**
     * @var date
     *
     * @ORM\Column(name="delivredMere", type="date")
     */
    private $delivredMere;

    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="parent")
     */
    private $etudiants;

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
     * Set nomPere
     *
     * @param string $nomPere
     *
     * @return Parent
     */
    public function setNomPere($nomPere)
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    /**
     * Get nomPere
     *
     * @return string
     */
    public function getNomPere()
    {
        return $this->nomPere;
    }

    /**
     * Set nomMere
     *
     * @param string $nomMere
     *
     * @return Parent
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set professionPere
     *
     * @param string $professionPere
     *
     * @return Parent
     */
    public function setProfessionPere($professionPere)
    {
        $this->professionPere = $professionPere;

        return $this;
    }

    /**
     * Get professionPere
     *
     * @return string
     */
    public function getProfessionPere()
    {
        return $this->professionPere;
    }

    /**
     * Set professionMere
     *
     * @param string $professionMere
     *
     * @return Parent
     */
    public function setProfessionMere($professionMere)
    {
        $this->professionMere = $professionMere;

        return $this;
    }

    /**
     * Get professionMere
     *
     * @return string
     */
    public function getProfessionMere()
    {
        return $this->professionMere;
    }

    /**
     * Set cinPere
     *
     * @param string $cinPere
     *
     * @return Parent
     */
    public function setCinPere($cinPere)
    {
        $this->cinPere = $cinPere;

        return $this;
    }

    /**
     * Get cinPere
     *
     * @return string
     */
    public function getCinPere()
    {
        return $this->cinPere;
    }

    /**
     * Set cinMere
     *
     * @param string $cinMere
     *
     * @return Parent
     */
    public function setCinMere($cinMere)
    {
        $this->cinMere = $cinMere;

        return $this;
    }

    /**
     * Get cinMere
     *
     * @return string
     */
    public function getCinMere()
    {
        return $this->cinMere;
    }

    /**
     * Set telPere
     *
     * @param integer $telPere
     *
     * @return Parent
     */
    public function setTelPere($telPere)
    {
        $this->telPere = $telPere;

        return $this;
    }

    /**
     * Get telPere
     *
     * @return int
     */
    public function getTelPere()
    {
        return $this->telPere;
    }

    /**
     * Set telMere
     *
     * @param string $telMere
     *
     * @return Parent
     */
    public function setTelMere($telMere)
    {
        $this->telMere = $telMere;

        return $this;
    }

    /**
     * Get telMere
     *
     * @return string
     */
    public function getTelMere()
    {
        return $this->telMere;
    }

    /**
     * Add etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Parents
     */
    public function addEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiants[] = $etudiant;

        return $this;
    }

    /**
     * Remove etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     */
    public function removeEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiants->removeElement($etudiant);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }

    /**
     * Set dateCinPere
     *
     * @param \DateTime $dateCinPere
     *
     * @return Parents
     */
    public function setDateCinPere($dateCinPere)
    {
        $this->dateCinPere = $dateCinPere;

        return $this;
    }

    /**
     * Get dateCinPere
     *
     * @return \DateTime
     */
    public function getDateCinPere()
    {
        return $this->dateCinPere;
    }

    /**
     * Set delivredPere
     *
     * @param \DateTime $delivredPere
     *
     * @return Parents
     */
    public function setDelivredPere($delivredPere)
    {
        $this->delivredPere = $delivredPere;

        return $this;
    }

    /**
     * Get delivredPere
     *
     * @return \DateTime
     */
    public function getDelivredPere()
    {
        return $this->delivredPere;
    }

    /**
     * Set delivredMere
     *
     * @param \DateTime $delivredMere
     *
     * @return Parents
     */
    public function setDelivredMere($delivredMere)
    {
        $this->delivredMere = $delivredMere;

        return $this;
    }

    /**
     * Get delivredMere
     *
     * @return \DateTime
     */
    public function getDelivredMere()
    {
        return $this->delivredMere;
    }
}
