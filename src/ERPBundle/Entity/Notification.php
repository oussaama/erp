<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjoute", type="datetime")
     */
    private $dateAjoute;

    /**
     * @var string
     *
     * @ORM\Column(name="notif", type="string", length=255)
     */
    private $notif;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="notification")
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Notification
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateAjoute
     *
     * @param \DateTime $dateAjoute
     *
     * @return Notification
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
     * Set notif
     *
     * @param string $notif
     *
     * @return Notification
     */
    public function setNotif($notif)
    {
        $this->notif = $notif;

        return $this;
    }

    /**
     * Get notif
     *
     * @return string
     */
    public function getNotif()
    {
        return $this->notif;
    }

    /**
     * Set user
     *
     * @param \ERPBundle\Entity\User $user
     *
     * @return Notification
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
