<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"admin" = "Admin","employee" = "Employee", "etudiant" = "Etudiant", "parents"="Parents" , "enseignant" = "Enseignant" , "entreprise" = "Entreprise"})
 *
 */
abstract class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Notification", mappedBy="user")
     */
    private $notification;

    /**
     * @ORM\OneToMany(targetEntity="Appsense", mappedBy="user")
     */
    private $appsense;

    /**
     * @ORM\OneToMany(targetEntity="Retard", mappedBy="user")
     */
    private $retard;

    /**
     * Add notification
     *
     * @param \ERPBundle\Entity\Notification $notification
     *
     * @return User
     */
    public function addNotification(\ERPBundle\Entity\Notification $notification)
    {
        $this->notification[] = $notification;

        return $this;
    }

    /**
     * Remove notification
     *
     * @param \ERPBundle\Entity\Notification $notification
     */
    public function removeNotification(\ERPBundle\Entity\Notification $notification)
    {
        $this->notification->removeElement($notification);
    }

    /**
     * Get notification
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotification()
    {
        return $this->notification;
    }
    

    /**
     * Add appsense
     *
     * @param \ERPBundle\Entity\Appsense $appsense
     *
     * @return User
     */
    public function addAppsense(\ERPBundle\Entity\Appsense $appsense)
    {
        $this->appsense[] = $appsense;

        return $this;
    }

    /**
     * Remove appsense
     *
     * @param \ERPBundle\Entity\Appsense $appsense
     */
    public function removeAppsense(\ERPBundle\Entity\Appsense $appsense)
    {
        $this->appsense->removeElement($appsense);
    }

    /**
     * Get appsense
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAppsense()
    {
        return $this->appsense;
    }

    /**
     * Add retard
     *
     * @param \ERPBundle\Entity\Retard $retard
     *
     * @return User
     */
    public function addRetard(\ERPBundle\Entity\Retard $retard)
    {
        $this->retard[] = $retard;

        return $this;
    }

    /**
     * Remove retard
     *
     * @param \ERPBundle\Entity\Retard $retard
     */
    public function removeRetard(\ERPBundle\Entity\Retard $retard)
    {
        $this->retard->removeElement($retard);
    }

    /**
     * Get retard
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRetard()
    {
        return $this->retard;
    }
}
