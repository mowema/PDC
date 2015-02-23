<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Zend\Form\Annotation;

use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerFile(__DIR__.'/../../../../../vendor/'
        .'doctrine/orm/lib/'
        .'Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');


/**
 *
 * @ORM\Entity(repositoryClass="Application\Entity\Repositories\RegistroRepository")
 * @ORM\Table(name="app_registro")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 * @Annotation\Name("app_registro")
 */
class Registro {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
   * @var integer
   * @access protected
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", options={"default" = 1})
     */
    protected $tipo;

    /**
     * @ORM\Column(type="string", nullable=true)
    */
    protected $nombre;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $direccion;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $cpostal;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $provincia;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $localidad;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lon;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lat;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $telefono;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $movil;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $web;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $blog;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $facebook;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $twitter;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $flickr;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $vimeo;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $youtube;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $referente;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $referentel;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tienePJ;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $npj;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $ncuit;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tipoConPJ;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tipoSinPJ;
   
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tipoOtro;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $creado;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $alcance;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $perfil;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $perfilotro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $intervencion;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cantIntegrantes;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cantMilitantes;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cantProfesionales;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cantOcacionales;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $ejeTematico1;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $ejeTematico2;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $ejeTematico3;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $actividades;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $actividadesOtro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $descActividades;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $destinatarios;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cantParticipantes;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $descOrg;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $espacioInfo;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $espacioInfoOtro;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $espacioInicio;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $espacioTipoUso;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $espacioTipoCompartido;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $espacioMtsCubiertos;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $espacioMtsDescubiertos;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $sectoresCubiertos;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $sectoresDescubiertos;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $sectores;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $sectoresOtro;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $salaTeatroMts;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $salaTeatroButacas;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $salaCineMts;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $salaCineButacas;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $salaRadioMts;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $salaRadioEquip;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $salaGrabaMts;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $salaGrabaEquip;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $equipAV;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $equipInformatico;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $equipSonido;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $equipEscen;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $equipOtro;  
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $equipAVOtro;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $equipInformaticoOtro;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $equipSonidoOtro;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $equipEscenOtro;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $equipOtroOtro;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $accsInternet;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $accsTipo;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $wifi;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $produccionAV;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $produccionRadio;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $produccionMultimedia;  
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $produccionGrafica;  
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionAVOtro;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioOtro;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioItem1;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioItemFrec1;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioItem2;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioItemFrec2;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioItem3;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionRadioItemFrec3;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionMultimediaOtro;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGraficaOtro;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGrafItem1;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGrafItemFrec1;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGrafItem2;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGrafItemFrec2;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGrafItem3;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $produccionGrafItemFrec3;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $espectaculos;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $espectaculosOtro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $muestras;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $muestrasOtro;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $talleresArtisticos;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $talleresDidacticos;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $talleresComunicPopular;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $talleresOficio;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $talleresOtros;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $contexto;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $contextoOtro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $comparte;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $comparteOtro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $descComparte;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $articulacionG;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $articulacionNG;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $articulacionGOtro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $descArticulacionG;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $articulacionNGOtro;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $descArticulacionNG;
      
    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nreg;
    /**
     * @ORM\Column(type="integer")
     */
    protected $anio;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $code;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha_creacion;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $fecha_modificado;

    /**
     * @ORM\Column(type="integer")
     */
    protected $estado;

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCpostal() {
        return $this->cpostal;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getLocalidad() {
        return $this->localidad;
    }
    
    public function getLon() {
        return $this->lon;
    }

    public function getLat() {
        return $this->lat;
    }
    
    public function getTelefono() {
        return $this->telefono;
    }

    public function getMovil() {
        return $this->movil;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getWeb() {
        return $this->web;
    }

    public function getBlog() {
        return $this->blog;
    }

    public function getFacebook() {
        return $this->facebook;
    }

    public function getTwitter() {
        return $this->twitter;
    }

    public function getFlickr() {
        return $this->flickr;
    }

    public function getVimeo() {
        return $this->vimeo;
    }

    public function getYoutube() {
        return $this->youtube;
    }

    public function getReferente() {
        return $this->referente;
    }

    public function getReferentel() {
        return $this->referentel;
    }

    public function getTienePJ() {
        return $this->tienePJ;
    }

    public function getNpj() {
        return $this->npj;
    }

    public function getNcuit() {
        return $this->ncuit;
    }

    public function getTipoConPJ() {
        return $this->tipoConPJ;
    }

    public function getTipoSinPJ() {
        return $this->tipoSinPJ;
    }

    public function getTipoOtro() {
        return $this->tipoOtro;
    }

    public function getCreado() {
        return $this->creado;
    }

    public function getAlcance() {
        return $this->alcance;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getPerfilotro() {
        return $this->perfilotro;
    }


    public function getCantIntegrantes() {
        return $this->cantIntegrantes;
    }

    public function getCantMilitantes() {
        return $this->cantMilitantes;
    }

    public function getCantProfesionales() {
        return $this->cantProfesionales;
    }

    public function getCantOcacionales() {
        return $this->cantOcacionales;
    }

    public function getEjeTematico1() {
        return $this->ejeTematico1;
    }

    public function getEjeTematico2() {
        return $this->ejeTematico2;
    }

    public function getEjeTematico3() {
        return $this->ejeTematico3;
    }


    public function getActividadesOtro() {
        return $this->actividadesOtro;
    }

    public function getDescActividades() {
        return $this->descActividades;
    }


    public function getCantParticipantes() {
        return $this->cantParticipantes;
    }

    public function getDescOrg() {
        return $this->descOrg;
    }

    public function getEspacioInfo() {
        return $this->espacioInfo;
    }

    public function getEspacioInfoOtro() {
        return $this->espacioInfoOtro;
    }

    public function getEspacioInicio() {
        return $this->espacioInicio;
    }

    public function getEspacioTipoUso() {
        return $this->espacioTipoUso;
    }

    public function getEspacioTipoCompartido() {
        return $this->espacioTipoCompartido;
    }

    public function getEspacioMtsCubiertos() {
        return $this->espacioMtsCubiertos;
    }

    public function getEspacioMtsDescubiertos() {
        return $this->espacioMtsDescubiertos;
    }

    public function getSectoresCubiertos() {
        return $this->sectoresCubiertos;
    }

    public function getSectoresDescubiertos() {
        return $this->sectoresDescubiertos;
    }


    public function getSectoresOtro() {
        return $this->sectoresOtro;
    }

    public function getSalaTeatroMts() {
        return $this->salaTeatroMts;
    }

    public function getSalaTeatroButacas() {
        return $this->salaTeatroButacas;
    }

    public function getSalaCineMts() {
        return $this->salaCineMts;
    }

    public function getSalaCineButacas() {
        return $this->salaCineButacas;
    }

    public function getSalaRadioMts() {
        return $this->salaRadioMts;
    }

    public function getSalaRadioEquip() {
        return $this->salaRadioEquip;
    }

    public function getSalaGrabaMts() {
        return $this->salaGrabaMts;
    }

    public function getSalaGrabaEquip() {
        return $this->salaGrabaEquip;
    }


    public function getEquipAVOtro() {
        return $this->equipAVOtro;
    }

    public function getEquipInformaticoOtro() {
        return $this->equipInformaticoOtro;
    }

    public function getEquipSonidoOtro() {
        return $this->equipSonidoOtro;
    }

    public function getEquipEscenOtro() {
        return $this->equipEscenOtro;
    }

    public function getEquipOtroOtro() {
        return $this->equipOtroOtro;
    }

    public function getAccsInternet() {
        return $this->accsInternet;
    }

    public function getAccsTipo() {
        return $this->accsTipo;
    }

    public function getWifi() {
        return $this->wifi;
    }

    public function getProduccionAVOtro() {
        return $this->produccionAVOtro;
    }

    public function getProduccionRadioOtro() {
        return $this->produccionRadioOtro;
    }

    public function getProduccionRadioItem1() {
        return $this->produccionRadioItem1;
    }

    public function getProduccionRadioItemFrec1() {
        return $this->produccionRadioItemFrec1;
    }

    public function getProduccionRadioItem2() {
        return $this->produccionRadioItem2;
    }

    public function getProduccionRadioItemFrec2() {
        return $this->produccionRadioItemFrec2;
    }

    public function getProduccionRadioItem3() {
        return $this->produccionRadioItem3;
    }

    public function getProduccionRadioItemFrec3() {
        return $this->produccionRadioItemFrec3;
    }

    public function getProduccionMultimediaOtro() {
        return $this->produccionMultimediaOtro;
    }

    public function getProduccionGraficaOtro() {
        return $this->produccionGraficaOtro;
    }

    public function getProduccionGrafItem1() {
        return $this->produccionGrafItem1;
    }

    public function getProduccionGrafItemFrec1() {
        return $this->produccionGrafItemFrec1;
    }

    public function getProduccionGrafItem2() {
        return $this->produccionGrafItem2;
    }

    public function getProduccionGrafItemFrec2() {
        return $this->produccionGrafItemFrec2;
    }

    public function getProduccionGrafItem3() {
        return $this->produccionGrafItem3;
    }

    public function getProduccionGrafItemFrec3() {
        return $this->produccionGrafItemFrec3;
    }

    public function getEspectaculosOtro() {
        return $this->espectaculosOtro;
    }

    public function getMuestrasOtro() {
        return $this->muestrasOtro;
    }

    public function getTalleresArtisticos() {
        return $this->talleresArtisticos;
    }

    public function getTalleresDidacticos() {
        return $this->talleresDidacticos;
    }

    public function getTalleresComunicPopular() {
        return $this->talleresComunicPopular;
    }

    public function getTalleresOficio() {
        return $this->talleresOficio;
    }

    public function getTalleresOtros() {
        return $this->talleresOtros;
    }

    public function getContexto() {
        return $this->contexto;
    }

    public function getContextoOtro() {
        return $this->contextoOtro;
    }

    public function getComparteOtro() {
        return $this->comparteOtro;
    }

    public function getDescComparte() {
        return $this->descComparte;
    }

    public function getArticulacionGOtro() {
        return $this->articulacionGOtro;
    }

    public function getDescArticulacionG() {
        return $this->descArticulacionG;
    }

    public function getArticulacionNGOtro() {
        return $this->articulacionNGOtro;
    }

    public function getDescArticulacionNG() {
        return $this->descArticulacionNG;
    }

    public function getNreg() {
        return $this->nreg;
    }

    public function getCode() {
        return $this->code;
    }

    public function getFecha_creacion() {
        return $this->fecha_creacion;
    }

    public function getFecha_modificado() {
        return $this->fecha_modificado;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    public function setCpostal($cpostal) {
        $this->cpostal = $cpostal;
        return $this;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
        return $this;
    }

    public function setLocalidad($localidad) {
        $this->localidad = $localidad;
        return $this;
    }
    
    public function setLon($lon) {
        $this->lon = $lon;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }


    public function setTelefono($telefono) {
        $this->telefono = $telefono;
        return $this;
    }

    public function setMovil($movil) {
        $this->movil = $movil;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setWeb($web) {
        $this->web = $web;
        return $this;
    }

    public function setBlog($blog) {
        $this->blog = $blog;
        return $this;
    }

    public function setFacebook($facebook) {
        $this->facebook = $facebook;
        return $this;
    }

    public function setTwitter($twitter) {
        $this->twitter = $twitter;
        return $this;
    }

    public function setFlickr($flickr) {
        $this->flickr = $flickr;
        return $this;
    }

    public function setVimeo($vimeo) {
        $this->vimeo = $vimeo;
        return $this;
    }

    public function setYoutube($youtube) {
        $this->youtube = $youtube;
        return $this;
    }

    public function setReferente($referente) {
        $this->referente = $referente;
        return $this;
    }

    public function setReferentel($referentel) {
        $this->referentel = $referentel;
        return $this;
    }

    public function setTienePJ($tienePJ) {
        $this->tienePJ = $tienePJ;
        return $this;
    }

    public function setNpj($npj) {
        $this->npj = $npj;
        return $this;
    }

    public function setNcuit($ncuit) {
        $this->ncuit = $ncuit;
        return $this;
    }

    public function setTipoConPJ($tipoConPJ) {
        $this->tipoConPJ = $tipoConPJ;
        return $this;
    }

    public function setTipoSinPJ($tipoSinPJ) {
        $this->tipoSinPJ = $tipoSinPJ;
        return $this;
    }

    public function setTipoOtro($tipoOtro) {
        $this->tipoOtro = $tipoOtro;
        return $this;
    }

    public function setCreado($creado) {
        $this->creado = $creado;
        return $this;
    }

    public function setAlcance($alcance) {
        $this->alcance = $alcance;
        return $this;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
        return $this;
    }

    public function setPerfilotro($perfilotro) {
        $this->perfilotro = $perfilotro;
        return $this;
    }


    public function setCantIntegrantes($cantIntegrantes) {
        $this->cantIntegrantes = $cantIntegrantes;
        return $this;
    }

    public function setCantMilitantes($cantMilitantes) {
        $this->cantMilitantes = $cantMilitantes;
        return $this;
    }

    public function setCantProfesionales($cantProfesionales) {
        $this->cantProfesionales = $cantProfesionales;
        return $this;
    }

    public function setCantOcacionales($cantOcacionales) {
        $this->cantOcacionales = $cantOcacionales;
        return $this;
    }

    public function setEjeTematico1($ejeTematico1) {
        $this->ejeTematico1 = $ejeTematico1;
        return $this;
    }

    public function setEjeTematico2($ejeTematico2) {
        $this->ejeTematico2 = $ejeTematico2;
        return $this;
    }

    public function setEjeTematico3($ejeTematico3) {
        $this->ejeTematico3 = $ejeTematico3;
        return $this;
    }


    public function setActividadesOtro($actividadesOtro) {
        $this->actividadesOtro = $actividadesOtro;
        return $this;
    }

    public function setDescActividades($descActividades) {
        $this->descActividades = $descActividades;
        return $this;
    }


    public function setCantParticipantes($cantParticipantes) {
        $this->cantParticipantes = $cantParticipantes;
        return $this;
    }

    public function setDescOrg($descOrg) {
        $this->descOrg = $descOrg;
        return $this;
    }

    public function setEspacioInfo($espacioInfo) {
        $this->espacioInfo = $espacioInfo;
        return $this;
    }

    public function setEspacioInfoOtro($espacioInfoOtro) {
        $this->espacioInfoOtro = $espacioInfoOtro;
        return $this;
    }

    public function setEspacioInicio($espacioInicio) {
        $this->espacioInicio = $espacioInicio;
        return $this;
    }

    public function setEspacioTipoUso($espacioTipoUso) {
        $this->espacioTipoUso = $espacioTipoUso;
        return $this;
    }

    public function setEspacioTipoCompartido($espacioTipoCompartido) {
        $this->espacioTipoCompartido = $espacioTipoCompartido;
        return $this;
    }

    public function setEspacioMtsCubiertos($espacioMtsCubiertos) {
        $this->espacioMtsCubiertos = $espacioMtsCubiertos;
        return $this;
    }

    public function setEspacioMtsDescubiertos($espacioMtsDescubiertos) {
        $this->espacioMtsDescubiertos = $espacioMtsDescubiertos;
        return $this;
    }

    public function setSectoresCubiertos($sectoresCubiertos) {
        $this->sectoresCubiertos = $sectoresCubiertos;
        return $this;
    }

    public function setSectoresDescubiertos($sectoresDescubiertos) {
        $this->sectoresDescubiertos = $sectoresDescubiertos;
        return $this;
    }


    public function setSectoresOtro($sectoresOtro) {
        $this->sectoresOtro = $sectoresOtro;
        return $this;
    }

    public function setSalaTeatroMts($salaTeatroMts) {
        $this->salaTeatroMts = $salaTeatroMts;
        return $this;
    }

    public function setSalaTeatroButacas($salaTeatroButacas) {
        $this->salaTeatroButacas = $salaTeatroButacas;
        return $this;
    }

    public function setSalaCineMts($salaCineMts) {
        $this->salaCineMts = $salaCineMts;
        return $this;
    }

    public function setSalaCineButacas($salaCineButacas) {
        $this->salaCineButacas = $salaCineButacas;
        return $this;
    }

    public function setSalaRadioMts($salaRadioMts) {
        $this->salaRadioMts = $salaRadioMts;
        return $this;
    }

    public function setSalaRadioEquip($salaRadioEquip) {
        $this->salaRadioEquip = $salaRadioEquip;
        return $this;
    }

    public function setSalaGrabaMts($salaGrabaMts) {
        $this->salaGrabaMts = $salaGrabaMts;
        return $this;
    }

    public function setSalaGrabaEquip($salaGrabaEquip) {
        $this->salaGrabaEquip = $salaGrabaEquip;
        return $this;
    }


    public function setEquipAVOtro($equipAVOtro) {
        $this->equipAVOtro = $equipAVOtro;
        return $this;
    }

    public function setEquipInformaticoOtro($equipInformaticoOtro) {
        $this->equipInformaticoOtro = $equipInformaticoOtro;
        return $this;
    }

    public function setEquipSonidoOtro($equipSonidoOtro) {
        $this->equipSonidoOtro = $equipSonidoOtro;
        return $this;
    }

    public function setEquipEscenOtro($equipEscenOtro) {
        $this->equipEscenOtro = $equipEscenOtro;
        return $this;
    }

    public function setEquipOtroOtro($equipOtroOtro) {
        $this->equipOtroOtro = $equipOtroOtro;
        return $this;
    }

    public function setAccsInternet($accsInternet) {
        $this->accsInternet = $accsInternet;
        return $this;
    }

    public function setAccsTipo($accsTipo) {
        $this->accsTipo = $accsTipo;
        return $this;
    }

    public function setWifi($wifi) {
        $this->wifi = $wifi;
        return $this;
    }

    public function setProduccionAVOtro($produccionAVOtro) {
        $this->produccionAVOtro = $produccionAVOtro;
        return $this;
    }

    public function setProduccionRadioOtro($produccionRadioOtro) {
        $this->produccionRadioOtro = $produccionRadioOtro;
        return $this;
    }

    public function setProduccionRadioItem1($produccionRadioItem1) {
        $this->produccionRadioItem1 = $produccionRadioItem1;
        return $this;
    }

    public function setProduccionRadioItemFrec1($produccionRadioItemFrec1) {
        $this->produccionRadioItemFrec1 = $produccionRadioItemFrec1;
        return $this;
    }

    public function setProduccionRadioItem2($produccionRadioItem2) {
        $this->produccionRadioItem2 = $produccionRadioItem2;
        return $this;
    }

    public function setProduccionRadioItemFrec2($produccionRadioItemFrec2) {
        $this->produccionRadioItemFrec2 = $produccionRadioItemFrec2;
        return $this;
    }

    public function setProduccionRadioItem3($produccionRadioItem3) {
        $this->produccionRadioItem3 = $produccionRadioItem3;
        return $this;
    }

    public function setProduccionRadioItemFrec3($produccionRadioItemFrec3) {
        $this->produccionRadioItemFrec3 = $produccionRadioItemFrec3;
        return $this;
    }

    public function setProduccionMultimediaOtro($produccionMultimediaOtro) {
        $this->produccionMultimediaOtro = $produccionMultimediaOtro;
        return $this;
    }

    public function setProduccionGraficaOtro($produccionGraficaOtro) {
        $this->produccionGraficaOtro = $produccionGraficaOtro;
        return $this;
    }

    public function setProduccionGrafItem1($produccionGrafItem1) {
        $this->produccionGrafItem1 = $produccionGrafItem1;
        return $this;
    }

    public function setProduccionGrafItemFrec1($produccionGrafItemFrec1) {
        $this->produccionGrafItemFrec1 = $produccionGrafItemFrec1;
        return $this;
    }

    public function setProduccionGrafItem2($produccionGrafItem2) {
        $this->produccionGrafItem2 = $produccionGrafItem2;
        return $this;
    }

    public function setProduccionGrafItemFrec2($produccionGrafItemFrec2) {
        $this->produccionGrafItemFrec2 = $produccionGrafItemFrec2;
        return $this;
    }

    public function setProduccionGrafItem3($produccionGrafItem3) {
        $this->produccionGrafItem3 = $produccionGrafItem3;
        return $this;
    }

    public function setProduccionGrafItemFrec3($produccionGrafItemFrec3) {
        $this->produccionGrafItemFrec3 = $produccionGrafItemFrec3;
        return $this;
    }

    public function setEspectaculosOtro($espectaculosOtro) {
        $this->espectaculosOtro = $espectaculosOtro;
        return $this;
    }

    public function setMuestrasOtro($muestrasOtro) {
        $this->muestrasOtro = $muestrasOtro;
        return $this;
    }

    public function setTalleresArtisticos($talleresArtisticos) {
        $this->talleresArtisticos = $talleresArtisticos;
        return $this;
    }

    public function setTalleresDidacticos($talleresDidacticos) {
        $this->talleresDidacticos = $talleresDidacticos;
        return $this;
    }

    public function setTalleresComunicPopular($talleresComunicPopular) {
        $this->talleresComunicPopular = $talleresComunicPopular;
        return $this;
    }

    public function setTalleresOficio($talleresOficio) {
        $this->talleresOficio = $talleresOficio;
        return $this;
    }

    public function setTalleresOtros($talleresOtros) {
        $this->talleresOtros = $talleresOtros;
        return $this;
    }

    public function setContexto($contexto) {
        $this->contexto = $contexto;
        return $this;
    }

    public function setContextoOtro($contextoOtro) {
        $this->contextoOtro = $contextoOtro;
        return $this;
    }

    public function setComparteOtro($comparteOtro) {
        $this->comparteOtro = $comparteOtro;
        return $this;
    }

    public function setDescComparte($descComparte) {
        $this->descComparte = $descComparte;
        return $this;
    }

    public function setArticulacionGOtro($articulacionGOtro) {
        $this->articulacionGOtro = $articulacionGOtro;
        return $this;
    }

    public function setDescArticulacionG($descArticulacionG) {
        $this->descArticulacionG = $descArticulacionG;
        return $this;
    }

    public function setArticulacionNGOtro($articulacionNGOtro) {
        $this->articulacionNGOtro = $articulacionNGOtro;
        return $this;
    }

    public function setDescArticulacionNG($descArticulacionNG) {
        $this->descArticulacionNG = $descArticulacionNG;
        return $this;
    }

    public function setNreg($nreg) {
        $this->nreg = $nreg;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setFecha_creacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
        return $this;
    }

    public function setFecha_modificado($fecha_modificado) {
        $this->fecha_modificado = $fecha_modificado;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

           
    
    public function getAnio() {
        return $this->anio;
    }

    public function setAnio($anio) {
        $this->anio = $anio;
        return $this;
    }

        
    
    
    
    /*
     * aca los selectores múltiples
     */
    
    
    public function getIntervencion() {
        return explode('|',$this->intervencion);
    }
    
    public function setIntervencion($intervencion) {
        $this->intervencion = implode('|',$intervencion);
        return $this;
    }
    
    public function getActividades() {
        return explode('|',$this->actividades);
    }

    public function setActividades($actividades) {
        $this->actividades = implode('|',$actividades);
        return $this;
    }

    public function getDestinatarios() {
        return explode('|',$this->destinatarios);
    }

    public function setDestinatarios($destinatarios) {
        $this->destinatarios = implode('|',$destinatarios);
        return $this;
    }

    public function getSectores() {
        return explode('|',$this->sectores);
    }

    public function setSectores($sectores) {
        $this->sectores = implode('|',$sectores);
        return $this;
    }

    public function getEquipAV() {
        return explode('|',$this->equipAV);
    }

    public function setEquipAV($equipAV) {
        $this->equipAV = implode('|',$equipAV);
        return $this;
    }

    public function getEquipInformatico() {
        return explode('|',$this->equipInformatico);
    }

    public function setEquipInformatico($equipInformatico) {
        $this->equipInformatico = implode('|',$equipInformatico);
        return $this;
    }

    public function getEquipSonido() {
        return explode('|',$this->equipSonido);
    }

    public function setEquipSonido($equipSonido) {
        $this->equipSonido = implode('|',$equipSonido);
        return $this;
    }

    public function getEquipEscen() {
        return explode('|',$this->equipEscen) ;
    }

    public function setEquipEscen($equipEscen) {
        $this->equipEscen = implode('|',$equipEscen);
        return $this;
    }

    public function getEquipOtro() {
        return explode('|',$this->equipOtro);
    }

    public function setEquipOtro($equipOtro) {
        $this->equipOtro = implode('|',$equipOtro);
        return $this;
    }

    
    
    
    
    public function getProduccionAV() {
        return explode('|',$this->produccionAV);
    }

    public function getProduccionRadio() {
        return explode('|',$this->produccionRadio);
    }

    public function getProduccionMultimedia() {
        return explode('|',$this->produccionMultimedia);
    }

    public function getProduccionGrafica() {
        return explode('|',$this->produccionGrafica);
    }

    public function getEspectaculos() {
        return explode('|',$this->espectaculos);
    }

    public function getMuestras() {
        return explode('|',$this->muestras);
    }

    public function getComparte() {
        return explode('|',$this->comparte);
    }

    public function getArticulacionG() {
        return explode('|',$this->articulacionG);
    }

    public function getArticulacionNG() {
        return explode('|',$this->articulacionNG);
    }

    public function setProduccionAV($produccionAV) {
        $this->produccionAV = implode('|',$produccionAV);
        return $this;
    }

    public function setProduccionRadio($produccionRadio) {
        $this->produccionRadio = implode('|',$produccionRadio);
        return $this;
    }

    public function setProduccionMultimedia($produccionMultimedia) {
        $this->produccionMultimedia = implode('|',$produccionMultimedia);
        return $this;
    }

    public function setProduccionGrafica($produccionGrafica) {
        $this->produccionGrafica = implode('|',$produccionGrafica);
        return $this;
    }

    public function setEspectaculos($espectaculos) {
        $this->espectaculos = implode('|',$espectaculos);
        return $this;
    }

    public function setMuestras($muestras) {
        $this->muestras = implode('|',$muestras);
        return $this;
    }

    public function setComparte($comparte) {
        $this->comparte = implode('|',$comparte);
        return $this;
    }

    public function setArticulacionG($articulacionG) {
        $this->articulacionG = implode('|',$articulacionG);
        return $this;
    }

    public function setArticulacionNG($articulacionNG) {
        $this->articulacionNG = implode('|',$articulacionNG);
        return $this;
    }

        
    
    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function getArrayCopy() {
        return get_object_vars($this);
    }
    
    

    public function populate($data = array()) {

        $this->tipo = 1;
        $this->estado = 1;
        $this->fecha_creacion = new \DateTime();
        $this->fecha_modificado = new \DateTime();
        
        $this->nreg = $data['nreg'];

        $this->nombre = $data['nombre'];
        $this->direccion = $data['direccion'];
        $this->provincia = $data['provincia'];
        $this->cpostal = $data['cpostal'];
        $this->localidad = $data['localidad'];
        $this->lon = $data['lon'];
        $this->lat = $data['lat'];
        $this->telefono = $data['telefono'];
        $this->movil = $data['movil'];
        $this->email = $data['email'];
        $this->web = $data['web'];
        $this->blog = $data['blog'];
        $this->facebook = $data['facebook'];
        $this->twitter = $data['twitter'];
        $this->flickr = $data['flickr'];
        $this->vimeo = $data['vimeo'];
        $this->youtube = $data['youtube'];
        $this->referente = $data['referente'];
        $this->referentel = $data['referentel'];
        $this->tienePJ = $data['tienePJ'];
        $this->npj = $data['npj'];
        $this->ncuit = $data['ncuit'];
        $this->tipoConPJ = $data['tipoConPJ'];
        $this->tipoSinPJ = $data['tipoSinPJ'];
        $this->tipoOtro = $data['tipoOtro'];
        $this->creado = $data['creado'];
        $this->alcance = $data['alcance'];
        $this->perfil = $data['perfil'];
        $this->perfilotro = $data['perfilotro'];
        $this->intervencion = $data['intervencion']; //-
        $this->cantIntegrantes = $data['cantIntegrantes'];
        $this->cantMilitantes = $data['cantMilitantes'];
        $this->cantProfesionales = $data['cantProfesionales'];
        $this->cantOcacionales = $data['cantOcacionales'];
        $this->ejeTematico1 = $data['ejeTematico1'];
        $this->ejeTematico2 = $data['ejeTematico2'];
        $this->ejeTematico3 = $data['ejeTematico3'];
        $this->actividades = $data['actividades'];//-s---------------------------
        $this->actividadesOtro = $data['actividadesOtro'];
        $this->descActividades = $data['descActividades'];
        $this->destinatarios = $data['destinatarios'];//-v-----------------------
        $this->cantParticipantes = $data['cantParticipantes'];
        $this->descOrg = $data['descOrg'];
        $this->espacioInfo = $data['espacioInfo'];
        $this->espacioInfoOtro = $data['espacioInfoOtro'];
        $this->espacioInicio = $data['espacioInicio'];
        $this->espacioTipoUso = $data['espacioTipoUso'];
        $this->espacioTipoCompartido = $data['espacioTipoCompartido'];
        $this->espacioMtsCubiertos = $data['espacioMtsCubiertos'];
        $this->espacioMtsDescubiertos = $data['espacioMtsDescubiertos'];
        $this->sectoresCubiertos = $data['sectoresCubiertos'];
        $this->sectoresDescubiertos = $data['sectoresDescubiertos'];
        $this->sectores = $data['sectores'];//-v---------------------------------
        $this->sectoresOtro = $data['sectoresOtro'];
        $this->salaTeatroMts = $data['salaTeatroMts'];
        $this->salaTeatroButacas = $data['salaTeatroButacas'];
        $this->salaCineMts = $data['salaCineMts'];
        $this->salaCineButacas = $data['salaCineButacas'];
        $this->salaRadioMts = $data['salaRadioMts'];
        $this->salaRadioEquip = $data['salaRadioEquip'];
        $this->salaGrabaMts = $data['salaGrabaMts'];
        $this->salaGrabaEquip = $data['salaGrabaEquip'];
        $this->equipAV = $data['equipAV'];//-O----------------------
        $this->equipInformatico = $data['equipInformatico'];//
        $this->equipSonido = $data['equipSonido'];//
        $this->equipEscen = $data['equipEscen'];//
        $this->equipOtro = $data['equipOtro'];//
        $this->equipAVOtro = $data['equipAVOtro'];
        $this->equipInformaticoOtro = $data['equipInformaticoOtro'];
        $this->equipSonidoOtro = $data['equipSonidoOtro'];
        $this->equipEscenOtro = $data['equipEscenOtro'];
        $this->equipOtroOtro = $data['equipOtroOtro'];
        $this->accsInternet = $data['accsInternet'];
        $this->accsTipo = $data['accsTipo'];
        $this->wifi = $data['wifi'];
        $this->produccionAV = $data['produccionAV'];//---O----------
        $this->produccionAVOtro = $data['produccionAVOtro'];
        $this->produccionRadio = $data['produccionRadio'];//-O-----
        $this->produccionRadioOtro = $data['produccionRadioOtro'];
        $this->produccionRadioItem1 = $data['produccionRadioItem1'];
        $this->produccionRadioItemFrec1 = $data['produccionRadioItemFrec1'];
        $this->produccionRadioItem2 = $data['produccionRadioItem2'];
        $this->produccionRadioItemFrec2 = $data['produccionRadioItemFrec2'];
        $this->produccionRadioItem3 = $data['produccionRadioItem3'];
        $this->produccionRadioItemFrec3 = $data['produccionRadioItemFrec3'];
        $this->produccionMultimedia = $data['produccionMultimedia'];//-O-----
        $this->produccionMultimediaOtro = $data['produccionMultimediaOtro'];
        $this->produccionGrafica = $data['produccionGrafica'];//-O-------------
        $this->produccionGraficaOtro = $data['produccionGraficaOtro'];
        $this->produccionGrafItem1 = $data['produccionGrafItem1'];
        $this->produccionGrafItemFrec1 = $data['produccionGrafItemFrec1'];
        $this->produccionGrafItem2 = $data['produccionGrafItem2'];
        $this->produccionGrafItemFrec2 = $data['produccionGrafItemFrec2'];
        $this->produccionGrafItem3 = $data['produccionGrafItem3'];
        $this->produccionGrafItemFrec3 = $data['produccionGrafItemFrec3'];
        $this->espectaculos = $data['espectaculos'];//-O-----------------------
        $this->espectaculosOtro = $data['espectaculosOtro'];
        $this->muestras = $data['muestras'];//--O---------------------------
        $this->muestrasOtro = $data['muestrasOtro'];
        $this->talleresArtisticos = $data['talleresArtisticos'];
        $this->talleresDidacticos = $data['talleresDidacticos'];
        $this->talleresComunicPopular = $data['talleresComunicPopular'];
        $this->talleresOficio = $data['talleresOficio'];
        $this->talleresOtros = $data['talleresOtros'];
        $this->contexto = $data['contexto'];
        $this->contextoOtro = $data['contextoOtro'];
        $this->comparte = $data['comparte'];//--O------------------
        $this->comparteOtro = $data['comparteOtro'];
        $this->descComparte = $data['descComparte'];
        $this->articulacionG = $data['articulacionG'];//--O--------------------
        $this->articulacionGOtro = $data['articulacionGOtro'];
        $this->descArticulacionG = $data['descArticulacionG'];
        $this->articulacionNG = $data['articulacionNG'];//---O-----------------
        $this->articulacionNGOtro = $data['articulacionNGOtro'];
        $this->descArticulacionNG = $data['descArticulacionNG'];
    }

}
