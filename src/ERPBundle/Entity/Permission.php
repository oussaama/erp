<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 *
 * @ORM\Table(name="permission")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\PermissionRepository")
 */
class Permission
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
     * @var bool
     *
     * @ORM\Column(name="EDT", type="boolean", options={"default" = 0},nullable=true)
     */
    private $eDT;

    /**
     * @var bool
     *
     * @ORM\Column(name="class", type="boolean",options={"default" = 0},nullable=true)
     */
    private $class;

    /**
     * @var bool
     *
     * @ORM\Column(name="ue", type="boolean",options={"default" = 0},nullable=true)
     */
    private $ue;

    /**
     * @var bool
     *
     * @ORM\Column(name="grh", type="boolean",options={"default" = 0},nullable=true)
     */
    private $grh;

    /**
     * @var bool
     *
     * @ORM\Column(name="paiment", type="boolean",options={"default" = 0},nullable=true)
     */
    private $paiment;

    /**
     * @ORM\OneToOne(targetEntity="ERPBundle\Entity\Admin", cascade={"persist"})
     */
    private $Admin;

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
     * Set eDT
     *
     * @param boolean $eDT
     *
     * @return Permission
     */
    public function setEDT($eDT)
    {
        if($eDT =="on"){
            $this->eDT = 1;
        }else {
            $this->eDT = 0;
        }
        return $this;
    }

    /**
     * Get eDT
     *
     * @return bool
     */
    public function getEDT()
    {
        return $this->eDT;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return Permission
     */
    public function setClass($class)
    {
        if($class =="on"){
            $this->class = 1;
        }else {
            $this->class = 0;
        }
        return $this;
    }

    /**
     * Get class
     *
     * @return bool
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set ue
     *
     * @param boolean $ue
     *
     * @return Permission
     */
    public function setUe($ue)
    {
        if($ue =="on"){
            $this->ue = 1;
        }else {
            $this->ue = 0;
        }
        return $this;
    }

    /**
     * Get ue
     *
     * @return bool
     */
    public function getUe()
    {
        return $this->ue;
    }

    /**
     * Set grh
     *
     * @param boolean $grh
     *
     * @return Permission
     */
    public function setGrh($grh)
    {
        if($grh =="on"){
            $this->grh = 1;
        }else {
            $this->grh = 0;
        }
        return $this;
    }

    /**
     * Get grh
     *
     * @return bool
     */
    public function getGrh()
    {
        return $this->grh;
    }

    /**
     * Set paiment
     *
     * @param boolean $paiment
     *
     * @return Permission
     */
    public function setPaiment($paiment)
    {
        if($paiment =="on"){
            $this->paiment = 1;
        }else {
            $this->paiment = 0;
        }
        return $this;
    }

    /**
     * Get paiment
     *
     * @return bool
     */
    public function getPaiment()
    {
        return $this->paiment;
    }

    /**
     * Set admin
     *
     * @param \ERPBundle\Entity\Admin $admin
     *
     * @return Permission
     */
    public function setAdmin(\ERPBundle\Entity\Admin $admin = null)
    {
        $this->Admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \ERPBundle\Entity\Admin
     */
    public function getAdmin()
    {
        return $this->Admin;
    }
}
