<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\NoteRepository")
 */
class Note
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
     * @var float
     *
     * @ORM\Column(name="ds", type="float",nullable=true)
     */
    private $ds;

    /**
     * @var float
     *
     * @ORM\Column(name="exam", type="float",nullable=true)
     */
    private $exam;

    /**
     * @var float
     *
     * @ORM\Column(name="cc", type="float",nullable=true)
     */
    private $cc;

    /**
     * @var float
     *
     * @ORM\Column(name="test", type="float",nullable=true)
     */
    private $test;

    /**
     * @var float
     *
     * @ORM\Column(name="tp", type="float",nullable=true)
     */
    private $tp;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="note")
     * @ORM\JoinColumn(name="etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity="Semestre", inversedBy="note")
     * @ORM\JoinColumn(name="semestre", referencedColumnName="id")
     */
    private $semestre;

    /**
     * @ORM\ManyToOne(targetEntity="Session", inversedBy="note")
     * @ORM\JoinColumn(name="session", referencedColumnName="id")
     */
    private $session;

    /**
     * @ORM\ManyToOne(targetEntity="Examen", inversedBy="note")
     * @ORM\JoinColumn(name="examen", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $examens;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="note")
     * @ORM\JoinColumn(name="matiere", referencedColumnName="id")
     */
    protected $matiere;



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
     * Set ds
     *
     * @param float $ds
     *
     * @return Note
     */
    public function setDs($ds)
    {
        $this->ds = $ds;

        return $this;
    }

    /**
     * Get ds
     *
     * @return float
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * Set exam
     *
     * @param float $exam
     *
     * @return Note
     */
    public function setExam($exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return float
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set test
     *
     * @param float $test
     *
     * @return Note
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return float
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set tp
     *
     * @param float $tp
     *
     * @return Note
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return float
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Note
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
     * @return float
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param float $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }


    /**
     * Set semestre
     *
     * @param \ERPBundle\Entity\Semestre $semestre
     *
     * @return Note
     */
    public function setSemestre(\ERPBundle\Entity\Semestre $semestre = null)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return \ERPBundle\Entity\Semestre
     */
    public function getSemestre()
    {
        return $this->semestre;
    }



    /**
     * Set session
     *
     * @param \ERPBundle\Entity\Session $session
     *
     * @return Note
     */
    public function setSession(\ERPBundle\Entity\Session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \ERPBundle\Entity\Session
     */
    public function getSession()
    {
        return $this->session;
    }


    /**
     * @return mixed
     */
    public function getExamens()
    {
        return $this->examens;
    }

    /**
     * @param mixed $examens
     */
    public function setExamens($examens)
    {
        $this->examens = $examens;
    }



    /**
     * Set matiere
     *
     * @param \ERPBundle\Entity\Matiere $matiere
     *
     * @return Note
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
}
