<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="sip_adjuntos")
 */
class Adjuntos {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Solicitudes", inversedBy="adjuntos")
     * @ORM\JoinColumn(name="solicitud", referencedColumnName="id", unique=false, nullable=true)
     */
    protected $solicitud;

    /**
     * @ORM\ManyToOne(targetEntity="Casos", inversedBy="adjuntos")
     * @ORM\JoinColumn(name="caso", referencedColumnName="id", unique=false, nullable=true)
     */
    protected $caso;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $titulo;
        
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $archivo;
    
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $fecha_crea;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $fecha_modi;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $state;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\User")
     */
    protected $usr_crea;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\User")
     */
    protected $usr_modi;

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getCaso() {
        return $this->caso;
    }

    public function setCaso($caso) {
        $this->caso = $caso;
    }
    
    public function getSolicitud() {
        return $this->solicitud;
    }

    public function setSolicitud($solicitud) {
        $this->solicitud = $solicitud;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getArchivo() {
        return $this->archivo;
    }

    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function getFecha_crea() {
        return $this->fecha_crea;
    }

    public function setFecha_crea($fecha_crea) {
        $this->fecha_crea = $fecha_crea;
    }

    public function getFecha_modi() {
        return $this->fecha_modi;
    }

    public function setFecha_modi($fecha_modi) {
        $this->fecha_modi = $fecha_modi;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getUsr_crea() {
        return $this->usr_crea;
    }

    public function setUsr_crea($usr_crea) {
        $this->usr_crea = $usr_crea;
    }

    public function getUsr_modi() {
        return $this->usr_modi;
    }

    public function setUsr_modi($usr_modi) {
        $this->usr_modi = $usr_modi;
    }



}