<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Sip\Entity\Repositories\SolicitantesRepository")
 * @ORM\Table(name="tbl_solicitantes")
 */
class Solicitantes {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $perfil;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $perfilotro;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $razonsocial;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $nombre;
       
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tipodocumento;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $numerodocumento;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $telefono;
        
    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $mail;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $calle_numero;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $ciudad;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $codigo_postal;

    /**
     * @ORM\ManyToOne(targetEntity="Provincias")
     * @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     */
    protected $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumn(name="pais", referencedColumnName="id")
     */
    protected $pais;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */     
    protected $sexo;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $edad;
        
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $profesion;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $estudios;

    
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

    public function getPerfil() {
        return $this->perfil;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    public function getPerfilotro() {
        return $this->perfilotro;
    }

    public function setPerfilotro($perfilotro) {
        $this->perfilotro = $perfilotro;
    }

    public function getRazonsocial() {
        return $this->razonsocial;
    }

    public function setRazonsocial($razonsocial) {
        $this->razonsocial = $razonsocial;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getTipodocumento() {
        return $this->tipodocumento;
    }

    public function setTipodocumento($tipodocumento) {
        $this->tipodocumento = $tipodocumento;
    }

    public function getNumerodocumento() {
        return $this->numerodocumento;
    }

    public function setNumerodocumento($numerodocumento) {
        $this->numerodocumento = $numerodocumento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function getCalle_numero() {
        return $this->calle_numero;
    }

    public function setCalle_numero($calle_numero) {
        $this->calle_numero = $calle_numero;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function getCodigo_postal() {
        return $this->codigo_postal;
    }

    public function setCodigo_postal($codigo_postal) {
        $this->codigo_postal = $codigo_postal;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getProfesion() {
        return $this->profesion;
    }

    public function setProfesion($profesion) {
        $this->profesion = $profesion;
    }

    public function getProfesionotra() {
        return $this->profesionotra;
    }

    public function setProfesionotra($profesionotra) {
        $this->profesionotra = $profesionotra;
    }

    public function getEstudios() {
        return $this->estudios;
    }

    public function setEstudios($estudios) {
        $this->estudios = $estudios;
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