<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="recu", type="string", length=255)
     */
    private $recu;

    /**
     * @var string
     *
     * @ORM\Column(name="send", type="string", length=255)
     */
    private $send;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=1000)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="important", type="boolean")
     */
    private $important;

    /**
     * @var boolean
     *
     * @ORM\Column(name="corbeille", type="boolean")
     */
    private $corbeille;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean")
     */
    private $archive;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoi", type="datetime")
     */
    private $dateEnvoi;

    /**
     * @ORM\OneToMany(targetEntity="Media", mappedBy="contact")
     */
    private $media;

    public function __construct()
    {
        $this->dateEnvoi = new \DateTime();
        $this->etat = 0;
        $this->important = 0;
        $this->corbeille = 0;
        $this->archive = 0;
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
     * Set recu
     *
     * @param string $recu
     *
     * @return Contact
     */
    public function setRecu($recu)
    {
        $this->recu = $recu;

        return $this;
    }

    /**
     * Get recu
     *
     * @return string
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * Set send
     *
     * @param string $send
     *
     * @return Contact
     */
    public function setSend($send)
    {
        $this->send = $send;

        return $this;
    }

    /**
     * Get send
     *
     * @return string
     */
    public function getSend()
    {
        return $this->send;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Contact
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Contact
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }


    /**
     * Set important
     *
     * @param boolean $important
     *
     * @return Contact
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Get important
     *
     * @return boolean
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Contact
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set archive
     *
     * @param boolean $archive
     *
     * @return Contact
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set corbeille
     *
     * @param boolean $corbeille
     *
     * @return Contact
     */
    public function setCorbeille($corbeille)
    {
        $this->corbeille = $corbeille;

        return $this;
    }

    /**
     * Get corbeille
     *
     * @return boolean
     */
    public function getCorbeille()
    {
        return $this->corbeille;
    }

    /**
     * Add medium
     *
     * @param \ERPBundle\Entity\Media $medium
     *
     * @return Contact
     */
    public function addMedia(\ERPBundle\Entity\Media $medium)
    {
        $this->media[] = $medium;

        return $this;
    }

    /**
     * Remove medium
     *
     * @param \ERPBundle\Entity\Media $medium
     */
    public function removeMedia(\ERPBundle\Entity\Media $medium)
    {
        $this->media->removeElement($medium);
    }

    /**
     * Get media
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Contact
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
}
