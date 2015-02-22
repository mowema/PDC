<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Sip\Entity\Repositories\SolicitudesRepository")
 * @ORM\Table(name="sip_solicitudes")
 */
class Solicitudes {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $expediente;

    /**
     * @ORM\ManyToOne(targetEntity="Organismos")
     * @ORM\JoinColumn(name="organismo", referencedColumnName="id")
     */
    protected $organismo;
    
    /**
     * @ORM\OneToMany(targetEntity="Casos", mappedBy="solicitud")
     */
    protected $casos;


    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $estado;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="FormasPedido")
     * @ORM\JoinColumn(name="formapedido", referencedColumnName="id")
     */
    protected $formapedido;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="PuntosIngreso")
     * @ORM\JoinColumn(name="puntoingreso", referencedColumnName="id")
     */
    protected $puntoingreso;
    
     /**
     * @ORM\OneToMany(targetEntity="Adjuntos", mappedBy="solicitud")
     */
    protected $adjuntos;
    
        
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $file;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $fechaenorganismo;
        
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $fechaenenlace;
    
    /**
     * @ORM\ManyToOne(targetEntity="Solicitantes")
     * @ORM\JoinColumn(name="solicitante", referencedColumnName="id")
     */
    protected $solicitante;

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
     * @ORM\ManyToOne(targetEntity="Application\Entity\User")
     */
    protected $usr_crea;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\User")
     */
    protected $usr_modi;


  
    public function __construct(){
        $this->casos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adjuntos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getExpediente() {
        return $this->expediente;
    }

    public function setExpediente($expediente) {
        $this->expediente = $expediente;
    }

    public function getOrganismo() {
        return $this->organismo;
    }

    public function setOrganismo($organismo) {
        $this->organismo = $organismo;
    }
    
    public function getCasos() {
        return $this->casos;
    }

    public function setCasos($casos) {
        $this->casos = $casos;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function getFormapedido() {
        return $this->formapedido;
    }

    public function setFormapedido($formapedido) {
        $this->formapedido = $formapedido;
    }

    public function getPuntoingreso() {
        return $this->puntoingreso;
    }

    public function setPuntoingreso($puntoingreso) {
        $this->puntoingreso = $puntoingreso;
    }

    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
    }
    
    public function getAdjuntos() {
        return $this->adjuntos;
    }

    public function setAdjuntos($adjuntos) {
        $this->adjuntos = $adjuntos;
    }

    public function getFechaenorganismo() {
        return $this->fechaenorganismo;
    }

    public function setFechaenorganismo($fechaenorganismo) {
        $this->fechaenorganismo = $fechaenorganismo;
    }

    public function getFechaenenlace() {
        return $this->fechaenenlace;
    }

    public function setFechaenenlace($fechaenenlace) {
        $this->fechaenenlace = $fechaenenlace;
    }
    
    public function getSolicitante() {
        return $this->solicitante;
    }

    public function setSolicitante($solicitante) {
        $this->solicitante = $solicitante;
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