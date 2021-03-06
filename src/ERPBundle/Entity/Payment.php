<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="payment")
     * @ORM\JoinColumn(name="etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="solde", type="string", length=255)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="carte", type="string", length=255,nullable=true)
     */
    private $carte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="payment")
     * @ORM\JoinColumn(name="status", referencedColumnName="id")
     */
    private $Status;

    /**
     * @ORM\ManyToOne(targetEntity="Slice", inversedBy="payment")
     * @ORM\JoinColumn(name="slice", referencedColumnName="id")
     */
    protected $slices;


    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="payment")
     * @ORM\JoinColumn(name="Etablissement", referencedColumnName="id")
     */
    private $Etablissement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="qualified", type="boolean")
     */
    private $qualified;


    /**
     * @return mixed
     */
    public function getReste()
    {
        return $this->reste;
    }

    /**
     * @param mixed $reste
     */
    public function setReste($reste)
    {
        $this->reste = $reste;
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
     * Set solde
     *
     * @param string $solde
     *
     * @return Payment
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return string
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Payment
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Payment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->qualified= 0;
        $this->createdAt = new \DateTime();
        $this->slices = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set idStatus
     *
     * @param \ERPBundle\Entity\Status $Status
     *
     * @return Admin
     */
    public function setStatus(\ERPBundle\Entity\Status $Status = null)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return \ERPBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @return mixed
     */
    public function getSlices()
    {
        return $this->slices;
    }

    /**
     * @param mixed $slices
     */
    public function setSlices($slices)
    {
        $this->slices = $slices;
    }



    /**
     * Set etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Payment
     */
    public function setEtudiant(\ERPBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \ERPBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }


    /**
     * Set etablissement
     *
     * @param \ERPBundle\Entity\Etablissement $etablissement
     *
     * @return Payment
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
     * @return mixed
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * @param mixed $filiere
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;
    }




    /**
     * Set carte
     *
     * @param integer $carte
     *
     * @return Payment
     */
    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return integer
     */
    public function getCarte()
    {
        return $this->carte;
    }
}
