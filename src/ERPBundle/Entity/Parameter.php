<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parameter
 *
 * @ORM\Table(name="parameter")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\ParameterRepository")
 */
class Parameter
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
     * @var array
     *
     * @ORM\Column(name="classe", type="array")
     */
    private $classe;

    /**
     * @var array
     *
     * @ORM\Column(name="groupe", type="array")
     */
    private $groupe;

    /**
     * @var array
     *
     * @ORM\Column(name="retard", type="array")
     */
    private $retard;

    /**
     * @var array
     *
     * @ORM\Column(name="ue", type="array")
     */
    private $ue;

    /**
     * @var array
     *
     * @ORM\Column(name="emploi", type="array")
     */
    private $emploi;

    /**
     * @var array
     *
     * @ORM\Column(name="note", type="array")
     */
    private $note;

    /**
     * @var array
     *
     * @ORM\Column(name="salle", type="array")
     */
    private $salle;

    /**
     * @var array
     *
     * @ORM\Column(name="examen", type="array")
     */
    private $examen;

    /**
     * @var array
     *
     * @ORM\Column(name="bulltin", type="array")
     */
    private $bulltin;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur", type="string")
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="parameter")
     * @ORM\JoinColumn(name="Etablissment", referencedColumnName="id")
     */
    private $Etablissement;


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
     * Set classe
     *
     * @param array $classe
     *
     * @return Parameter
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return array
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set groupe
     *
     * @param array $groupe
     *
     * @return Parameter
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return array
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set retard
     *
     * @param array $retard
     *
     * @return Parameter
     */
    public function setRetard($retard)
    {
        $this->retard = $retard;

        return $this;
    }

    /**
     * Get retard
     *
     * @return array
     */
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * Set ue
     *
     * @param array $ue
     *
     * @return Parameter
     */
    public function setUe($ue)
    {
        $this->ue = $ue;

        return $this;
    }

    /**
     * Get ue
     *
     * @return array
     */
    public function getUe()
    {
        return $this->ue;
    }

    /**
     * Set emploi
     *
     * @param array $emploi
     *
     * @return Parameter
     */
    public function setEmploi($emploi)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get emploi
     *
     * @return array
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * Set note
     *
     * @param array $note
     *
     * @return Parameter
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return array
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set salle
     *
     * @param array $salle
     *
     * @return Parameter
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return array
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set examen
     *
     * @param array $examen
     *
     * @return Parameter
     */
    public function setExamen($examen)
    {
        $this->examen = $examen;

        return $this;
    }

    /**
     * Get examen
     *
     * @return array
     */
    public function getExamen()
    {
        return $this->examen;
    }

    /**
     * Set bulltin
     *
     * @param array $bulltin
     *
     * @return Parameter
     */
    public function setBulltin($bulltin)
    {
        $this->bulltin = $bulltin;

        return $this;
    }

    /**
     * Get bulltin
     *
     * @return array
     */
    public function getBulltin()
    {
        return $this->bulltin;
    }

    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     *
     * @return Parameter
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return string
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set etablissement
     *
     * @param \ERPBundle\Entity\Etablissement $etablissement
     *
     * @return Parameter
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
