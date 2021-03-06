<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Note extends \ERPBundle\Entity\Note implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'ds', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'exam', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'cc', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'test', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'tp', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'semestre', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'session', 'examens', 'matiere'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'ds', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'exam', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'cc', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'test', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'tp', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'semestre', '' . "\0" . 'ERPBundle\\Entity\\Note' . "\0" . 'session', 'examens', 'matiere'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Note $proxy) {
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
    public function setDs($ds)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDs', [$ds]);

        return parent::setDs($ds);
    }

    /**
     * {@inheritDoc}
     */
    public function getDs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDs', []);

        return parent::getDs();
    }

    /**
     * {@inheritDoc}
     */
    public function setExam($exam)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExam', [$exam]);

        return parent::setExam($exam);
    }

    /**
     * {@inheritDoc}
     */
    public function getExam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExam', []);

        return parent::getExam();
    }

    /**
     * {@inheritDoc}
     */
    public function setTest($test)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTest', [$test]);

        return parent::setTest($test);
    }

    /**
     * {@inheritDoc}
     */
    public function getTest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTest', []);

        return parent::getTest();
    }

    /**
     * {@inheritDoc}
     */
    public function setTp($tp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTp', [$tp]);

        return parent::setTp($tp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTp', []);

        return parent::getTp();
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
    public function getCc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCc', []);

        return parent::getCc();
    }

    /**
     * {@inheritDoc}
     */
    public function setCc($cc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCc', [$cc]);

        return parent::setCc($cc);
    }

    /**
     * {@inheritDoc}
     */
    public function setSemestre(\ERPBundle\Entity\Semestre $semestre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSemestre', [$semestre]);

        return parent::setSemestre($semestre);
    }

    /**
     * {@inheritDoc}
     */
    public function getSemestre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSemestre', []);

        return parent::getSemestre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSession(\ERPBundle\Entity\Session $session = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSession', [$session]);

        return parent::setSession($session);
    }

    /**
     * {@inheritDoc}
     */
    public function getSession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSession', []);

        return parent::getSession();
    }

    /**
     * {@inheritDoc}
     */
    public function getExamens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExamens', []);

        return parent::getExamens();
    }

    /**
     * {@inheritDoc}
     */
    public function setExamens($examens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExamens', [$examens]);

        return parent::setExamens($examens);
    }

    /**
     * {@inheritDoc}
     */
    public function setMatiere(\ERPBundle\Entity\Matiere $matiere = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatiere', [$matiere]);

        return parent::setMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatiere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', []);

        return parent::getMatiere();
    }

}
