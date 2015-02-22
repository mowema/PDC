<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * 
 * @ORM\Entity(repositoryClass="Sip\Entity\Repositories\CasosRepository")
 * @ORM\Table(name="sip_casos")
 */
class Casos {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;    
    
    /**
     * @ORM\ManyToOne(targetEntity="Solicitudes", inversedBy="casos")
     * @ORM\JoinColumn(name="solicitud", referencedColumnName="id")
     */
    protected $solicitud;
     
    /**
     * @ORM\OneToOne(targetEntity="Identificador", inversedBy="caso")
     * @ORM\JoinColumn(name="identificador", referencedColumnName="id")
     */
    protected $identificador;
   
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $pregunta;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $rubro;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $itinerario;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $posderivacion;

    /**
     * @ORM\ManyToOne(targetEntity="Organismos")
     * @ORM\JoinColumn(name="sector", referencedColumnName="id")
     */
    protected $sector;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $prorroga;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $respuesta;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $condirespuesta;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $fecharespuesta;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $dias;

    /**
     * @ORM\ManyToOne(targetEntity="Organismos")
     * @ORM\JoinColumn(name="firmante", referencedColumnName="id")
     */
    protected $firmante;
    
     /**
     * @ORM\OneToMany(targetEntity="Adjuntos", mappedBy="caso")
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

    
    public function __construct() {
        $this->adjuntos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getSolicitud() {
        return $this->solicitud;
    }

    public function setSolicitud($solicitud) {
        $this->solicitud = $solicitud;
    }
    
    public function getIdentificador() {
        return $this->identificador;
    }

    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }

    public function getPregunta() {
        return $this->pregunta;
    }

    public function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }

    public function getRubro() {
        return $this->rubro;
    }

    public function setRubro($rubro) {
        $this->rubro = $rubro;
    }

    public function getItinerario() {
        return $this->itinerario;
    }

    public function setItinerario($itinerario) {
        $this->itinerario = $itinerario;
    }

    public function getPosderivacion() {
        return $this->posderivacion;
    }

    public function setPosderivacion($posderivacion) {
        $this->posderivacion = $posderivacion;
    }

    public function getSector() {
        return $this->sector;
    }

    public function setSector($sector) {
        $this->sector = $sector;
    }


    public function getProrroga() {
        return $this->prorroga;
    }

    public function setProrroga($prorroga) {
        $this->prorroga = $prorroga;
    }

    public function getRespuesta() {
        return $this->respuesta;
    }

    public function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }

    public function getCondirespuesta() {
        return $this->condirespuesta;
    }

    public function setCondirespuesta($condirespuesta) {
        $this->condirespuesta = $condirespuesta;
    }

    public function getFecharespuesta() {
        return $this->fecharespuesta;
    }

    public function setFecharespuesta($fecharespuesta) {
        $this->fecharespuesta = $fecharespuesta;
    }
    
    public function getDias() {
        return $this->dias;
    }

    public function setDias($dias) {
        $this->dias = $dias;
    }

    public function getFirmante() {
        return $this->firmante;
    }

    public function setFirmante($firmante) {
        $this->firmante = $firmante;
    }
    
    public function getAdjuntos() {
        return $this->adjuntos;
    }

    public function setAdjuntos($adjuntos) {
        $this->adjuntos = $adjuntos;
    }

    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
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

    
    public function getArrayCopy() {
        return get_object_vars($this);
    }

}