<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Payment extends \ERPBundle\Entity\Payment implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'solde', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'carte', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'createdAt', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'Status', 'slices', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'Etablissement', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'qualified'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'solde', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'carte', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'createdAt', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'Status', 'slices', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'Etablissement', '' . "\0" . 'ERPBundle\\Entity\\Payment' . "\0" . 'qualified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Payment $proxy) {
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
    public function getReste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReste', []);

        return parent::getReste();
    }

    /**
     * {@inheritDoc}
     */
    public function setReste($reste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReste', [$reste]);

        return parent::setReste($reste);
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
    public function setSolde($solde)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolde', [$solde]);

        return parent::setSolde($solde);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolde()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolde', []);

        return parent::getSolde();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getQualified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQualified', []);

        return parent::getQualified();
    }

    /**
     * {@inheritDoc}
     */
    public function setQualified($qualified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQualified', [$qualified]);

        return parent::setQualified($qualified);
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(\ERPBundle\Entity\Status $Status = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$Status]);

        return parent::setStatus($Status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getSlices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlices', []);

        return parent::getSlices();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlices($slices)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlices', [$slices]);

        return parent::setSlices($slices);
    }

    /**
     * {@inheritDoc}
     */
    public function setEtudiant(\ERPBundle\Entity\Etudiant $etudiant = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtudiant', [$etudiant]);

        return parent::setEtudiant($etudiant);
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
    public function getFiliere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiliere', []);

        return parent::getFiliere();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiliere($filiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiliere', [$filiere]);

        return parent::setFiliere($filiere);
    }

    /**
     * {@inheritDoc}
     */
    public function setCarte($carte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarte', [$carte]);

        return parent::setCarte($carte);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarte', []);

        return parent::getCarte();
    }

}
