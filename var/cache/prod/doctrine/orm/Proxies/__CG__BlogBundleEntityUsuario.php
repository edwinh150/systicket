<?php

namespace Proxies\__CG__\BlogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \BlogBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'idUsuario', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'nombres', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'apellidos', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'username', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'tipoUsuario', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'rolId', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'estado', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'fechaRegistro'];
        }

        return ['__isInitialized__', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'idUsuario', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'nombres', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'apellidos', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'username', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'tipoUsuario', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'rolId', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'estado', '' . "\0" . 'BlogBundle\\Entity\\Usuario' . "\0" . 'fechaRegistro'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
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
    public function setIdUsuario($idUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUsuario', [$idUsuario]);

        return parent::setIdUsuario($idUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUsuario', []);

        return parent::getIdUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombres($nombres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombres', [$nombres]);

        return parent::setNombres($nombres);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombres', []);

        return parent::getNombres();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', [$apellidos]);

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoUsuario($tipoUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoUsuario', [$tipoUsuario]);

        return parent::setTipoUsuario($tipoUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoUsuario', []);

        return parent::getTipoUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setRolId($rolId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRolId', [$rolId]);

        return parent::setRolId($rolId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRolId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRolId', []);

        return parent::getRolId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaRegistro($fechaRegistro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaRegistro', [$fechaRegistro]);

        return parent::setFechaRegistro($fechaRegistro);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaRegistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaRegistro', []);

        return parent::getFechaRegistro();
    }

}