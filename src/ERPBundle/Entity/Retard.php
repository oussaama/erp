<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retard
 *
 * @ORM\Table(name="retard")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\RetardRepository")
 */
class Retard
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
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="datetime")
     */
    private $dateModif;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="retard")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

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
     * Set nombre
     *
     * @param integer $nombre
     *
     * @return Retard
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return int
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Retard
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
     * Set user
     *
     * @param \ERPBundle\Entity\User $user
     *
     * @return Retard
     */
    public function setUser(\ERPBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ERPBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
