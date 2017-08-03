<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Document extends \ERPBundle\Entity\Document implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'identifiant', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'diplome', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'note', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'extrait', 'fichierId', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'fichierDiplome', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'fichierNote', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'fichierExtrait'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'identifiant', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'diplome', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'note', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'extrait', 'fichierId', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'fichierDiplome', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'fichierNote', '' . "\0" . 'ERPBundle\\Entity\\Document' . "\0" . 'fichierExtrait'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Document $proxy) {
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
    public function setIdentifiant($identifiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifiant', [$identifiant]);

        return parent::setIdentifiant($identifiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifiant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifiant', []);

        return parent::getIdentifiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiplome($diplome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiplome', [$diplome]);

        return parent::setDiplome($diplome);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiplome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiplome', []);

        return parent::getDiplome();
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
    public function setFichierId(array $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichierId', [$file]);

        return parent::setFichierId($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadDir', []);

        return parent::getUploadDir();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutRoot', []);

        return parent::getAbsolutRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebpath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebpath', []);

        return parent::getWebpath();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadRoot', []);

        return parent::getUploadRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function uploadIdentifiant($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'uploadIdentifiant', [$id]);

        return parent::uploadIdentifiant($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichierDiplome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichierDiplome', []);

        return parent::getFichierDiplome();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichierDiplome(array $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichierDiplome', [$file]);

        return parent::setFichierDiplome($file);
    }

    /**
     * {@inheritDoc}
     */
    public function uploadDiplome($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'uploadDiplome', [$id]);

        return parent::uploadDiplome($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichierNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichierNote', []);

        return parent::getFichierNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichierNote(array $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichierNote', [$file]);

        return parent::setFichierNote($file);
    }

    /**
     * {@inheritDoc}
     */
    public function uploadNote($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'uploadNote', [$id]);

        return parent::uploadNote($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setExtrait($extrait)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtrait', [$extrait]);

        return parent::setExtrait($extrait);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtrait()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtrait', []);

        return parent::getExtrait();
    }

    /**
     * {@inheritDoc}
     */
    public function getFichierExtrait()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichierExtrait', []);

        return parent::getFichierExtrait();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichierExtrait(array $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichierExtrait', [$file]);

        return parent::setFichierExtrait($file);
    }

    /**
     * {@inheritDoc}
     */
    public function uploadExtrait($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'uploadExtrait', [$id]);

        return parent::uploadExtrait($id);
    }

}
