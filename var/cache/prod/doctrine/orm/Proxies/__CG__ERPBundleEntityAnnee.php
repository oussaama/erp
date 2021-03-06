<?php

namespace Proxies\__CG__\ERPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Annee extends \ERPBundle\Entity\Annee implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'annee', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'debut', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'fin', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'enabled', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'dateAjout', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'Etablissement', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'classe', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'unite'];
        }

        return ['__isInitialized__', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'id', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'annee', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'debut', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'fin', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'enabled', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'dateAjout', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'etudiant', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'Etablissement', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'classe', '' . "\0" . 'ERPBundle\\Entity\\Annee' . "\0" . 'unite'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Annee $proxy) {
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
    public function setAnnee($annee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee', [$annee]);

        return parent::setAnnee($annee);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee', []);

        return parent::getAnnee();
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
    public function setDebut($debut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDebut', [$debut]);

        return parent::setDebut($debut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDebut', []);

        return parent::getDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setFin($fin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFin', [$fin]);

        return parent::setFin($fin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFin', []);

        return parent::getFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAjout($dateAjout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAjout', [$dateAjout]);

        return parent::setDateAjout($dateAjout);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAjout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAjout', []);

        return parent::getDateAjout();
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
    public function addClasse(\ERPBundle\Entity\Classe $classe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClasse', [$classe]);

        return parent::addClasse($classe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClasse(\ERPBundle\Entity\Classe $classe)
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
