<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Parameter extends \ERPBundle\Entity\Parameter implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'classe', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'groupe', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'retard', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'ue', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'emploi', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'note', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'salle', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'examen', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'bulltin', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'utilisateur', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'Etablissement'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'classe', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'groupe', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'retard', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'ue', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'emploi', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'note', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'salle', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'examen', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'bulltin', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'utilisateur', '' . "\0" . 'ERPBundle\\Entity\\Parameter' . "\0" . 'Etablissement'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Parameter $proxy) {
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
    public function setClasse($classe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClasse', [$classe]);

        return parent::setClasse($classe);
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
    public function setGroupe($groupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupe', [$groupe]);

        return parent::setGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupe', []);

        return parent::getGroupe();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetard($retard)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetard', [$retard]);

        return parent::setRetard($retard);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetard()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetard', []);

        return parent::getRetard();
    }

    /**
     * {@inheritDoc}
     */
    public function setUe($ue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUe', [$ue]);

        return parent::setUe($ue);
    }

    /**
     * {@inheritDoc}
     */
    public function getUe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUe', []);

        return parent::getUe();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmploi($emploi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmploi', [$emploi]);

        return parent::setEmploi($emploi);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmploi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmploi', []);

        return parent::getEmploi();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalle($salle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalle', [$salle]);

        return parent::setSalle($salle);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalle', []);

        return parent::getSalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setExamen($examen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExamen', [$examen]);

        return parent::setExamen($examen);
    }

    /**
     * {@inheritDoc}
     */
    public function getExamen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExamen', []);

        return parent::getExamen();
    }

    /**
     * {@inheritDoc}
     */
    public function setBulltin($bulltin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBulltin', [$bulltin]);

        return parent::setBulltin($bulltin);
    }

    /**
     * {@inheritDoc}
     */
    public function getBulltin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBulltin', []);

        return parent::getBulltin();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur($utilisateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', [$utilisateur]);

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', []);

        return parent::getUtilisateur();
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

}