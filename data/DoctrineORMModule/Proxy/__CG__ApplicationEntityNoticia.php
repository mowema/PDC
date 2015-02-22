<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Noticia extends \Application\Entity\Noticia implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'tipo', 'titulo', 'cuerpo', 'fecha_creacion', 'fecha_modificado', 'estado', 'usuario_c', 'usuario_m', 'grupo', 'noticia');
        }

        return array('__isInitialized__', 'id', 'tipo', 'titulo', 'cuerpo', 'fecha_creacion', 'fecha_modificado', 'estado', 'usuario_c', 'usuario_m', 'grupo', 'noticia');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Noticia $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuerpo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuerpo', array());

        return parent::getCuerpo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuerpo($cuerpo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuerpo', array($cuerpo));

        return parent::setCuerpo($cuerpo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCreacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCreacion', array());

        return parent::getFechaCreacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCreacion($fechacreacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCreacion', array($fechacreacion));

        return parent::setFechaCreacion($fechacreacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaModificado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaModificado', array());

        return parent::getFechaModificado();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaModificado($fechamodificado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaModificado', array($fechamodificado));

        return parent::setFechaModificado($fechamodificado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioC()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioC', array());

        return parent::getUsuarioC();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioC($usuario_c)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioC', array($usuario_c));

        return parent::setUsuarioC($usuario_c);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioM()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioM', array());

        return parent::getUsuarioM();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioM($usuario_m)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioM', array($usuario_m));

        return parent::setUsuarioM($usuario_m);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', array());

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', array($tipo));

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupo', array());

        return parent::getGrupo();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrupo($grupo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrupo', array($grupo));

        return parent::setGrupo($grupo);
    }

    /**
     * {@inheritDoc}
     */
    public function setNoticia($noticia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoticia', array($noticia));

        return parent::setNoticia($noticia);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoticia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoticia', array());

        return parent::getNoticia();
    }

    /**
     * {@inheritDoc}
     */
    public function addNoticia($noticias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNoticia', array($noticias));

        return parent::addNoticia($noticias);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrayCopy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrayCopy', array());

        return parent::getArrayCopy();
    }

    /**
     * {@inheritDoc}
     */
    public function populate($data = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'populate', array($data));

        return parent::populate($data);
    }

}
