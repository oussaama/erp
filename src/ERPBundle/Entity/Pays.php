<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="code", type="string")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="pays")
     */
    private $etudiant;


    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="pays")
     */
    private $employee;

    /**
     * @ORM\OneToMany(targetEntity="Enseignant", mappedBy="pays")
     */
    private $enseignant;

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
     * Set codePays
     *
     * @param string $codePays
     *
     * @return Pays
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePays
     *
     * @return string
     */
    public function getCodePays()
    {
        return $this->codePays;
    }

    /**
     * Set en
     *
     * @param string $en
     *
     * @return Pays
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     *
     * @return string
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set fr
     *
     * @param string $fr
     *
     * @return Pays
     */
    public function setFr($fr)
    {
        $this->fr = $fr;

        return $this;
    }

    /**
     * Get fr
     *
     * @return string
     */
    public function getFr()
    {
        return $this->fr;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Pays
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
     * Set code
     *
     * @param string $code
     *
     * @return Pays
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pays
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add employee
     *
     * @param \ERPBundle\Entity\Employee $employee
     *
     * @return Pays
     */
    public function addEmployee(\ERPBundle\Entity\Employee $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \ERPBundle\Entity\Employee $employee
     */
    public function removeEmployee(\ERPBundle\Entity\Employee $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Get employee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Add enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     *
     * @return Pays
     */
    public function addEnseignant(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     */
    public function removeEnseignant(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant->removeElement($enseignant);
    }

    /**
     * Get enseignant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }
}
