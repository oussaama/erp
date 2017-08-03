<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Niveau extends \ERPBundle\Entity\Niveau implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'niveau', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'classe', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'Etablissement', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'specialite', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'matiere', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'unite', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'enabled'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'niveau', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'classe', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'Etablissement', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'specialite', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'matiere', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'unite', '' . "\0" . 'ERPBundle\\Entity\\Niveau' . "\0" . 'enabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Niveau $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau($niveau)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', [$niveau]);

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function addEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEtudiant', [$etudiant]);

        return parent::addEtudiant($etudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEtudiant', [$etudiant]);

        return parent::removeEtudiant($etudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtudiant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtudiant', []);

        return parent::getEtudiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtablissement(\ERPBundle\Entity\Etablissement $etablissement = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtablissement', [$etablissement]);

        return parent::setEtablissement($etablissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtablissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtablissement', []);

        return parent::getEtablissement();
    }

    /**
     * {@inheritDoc}
     */
    public function addClasse(\ERPBundle\Entity\Niveau $classe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClasse', [$classe]);

        return parent::addClasse($classe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClasse(\ERPBundle\Entity\Niveau $classe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClasse', [$classe]);

        return parent::removeClasse($classe);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasse', []);

        return parent::getClasse();
    }

    /**
     * {@inheritDoc}
     */
    public function addMatiere(\ERPBundle\Entity\Matiere $matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMatiere', [$matiere]);

        return parent::addMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMatiere(\ERPBundle\Entity\Matiere $matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMatiere', [$matiere]);

        return parent::removeMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatiere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', []);

        return parent::getMatiere();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialite(\ERPBundle\Entity\Specialite $specialite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialite', [$specialite]);

        return parent::setSpecialite($specialite);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialite', []);

        return parent::getSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function addUnite(\ERPBundle\Entity\UniteEnseignement $unite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUnite', [$unite]);

        return parent::addUnite($unite);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUnite(\ERPBundle\Entity\UniteEnseignement $unite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUnite', [$unite]);

        return parent::removeUnite($unite);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnite', []);

        return parent::getUnite();
    }

}
