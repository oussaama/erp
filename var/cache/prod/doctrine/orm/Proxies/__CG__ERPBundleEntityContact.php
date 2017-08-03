<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contact extends \ERPBundle\Entity\Contact implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'recu', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'send', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'objet', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'message', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'etat', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'important', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'corbeille', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'archive', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'dateEnvoi', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'media'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'recu', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'send', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'objet', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'message', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'etat', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'important', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'corbeille', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'archive', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'dateEnvoi', '' . "\0" . 'ERPBundle\\Entity\\Contact' . "\0" . 'media'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contact $proxy) {
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
    public function setRecu($recu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecu', [$recu]);

        return parent::setRecu($recu);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecu', []);

        return parent::getRecu();
    }

    /**
     * {@inheritDoc}
     */
    public function setSend($send)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSend', [$send]);

        return parent::setSend($send);
    }

    /**
     * {@inheritDoc}
     */
    public function getSend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSend', []);

        return parent::getSend();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjet($objet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjet', [$objet]);

        return parent::setObjet($objet);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjet', []);

        return parent::getObjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setImportant($important)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImportant', [$important]);

        return parent::setImportant($important);
    }

    /**
     * {@inheritDoc}
     */
    public function getImportant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImportant', []);

        return parent::getImportant();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEnvoi($dateEnvoi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEnvoi', [$dateEnvoi]);

        return parent::setDateEnvoi($dateEnvoi);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEnvoi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEnvoi', []);

        return parent::getDateEnvoi();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchive($archive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchive', [$archive]);

        return parent::setArchive($archive);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchive', []);

        return parent::getArchive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorbeille($corbeille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorbeille', [$corbeille]);

        return parent::setCorbeille($corbeille);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorbeille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorbeille', []);

        return parent::getCorbeille();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(\ERPBundle\Entity\Media $medium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedia', [$medium]);

        return parent::addMedia($medium);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedia(\ERPBundle\Entity\Media $medium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedia', [$medium]);

        return parent::removeMedia($medium);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', []);

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

}
