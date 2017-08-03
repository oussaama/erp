<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="admin")
 * @UniqueEntity(fields = "username", targetClass = "ERPBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "ERPBundle\Entity\User", message="fos_user.email.already_used")
 */
class Admin extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="ERPBundle\Entity\Etablissement", cascade={"persist"})
     */
    private $Etablissement;

    public function __construct()
    {
        parent::__construct();
        $this->addRole("ROLE_ADMIN");
        $this->setEnabled(1);
    }

    /**
     * Set idEtablissement
     *
     * @param \ERPBundle\Entity\Etablissement $Etablissement
     *
     * @return Admin
     */
    public function setEtablissement(\ERPBundle\Entity\Etablissement $Etablissement = null)
    {
        $this->Etablissement = $Etablissement;

        return $this;
    }

    /**
     * Get idEtablissement
     *
     * @return \ERPBundle\Entity\Etablissement
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }
}
