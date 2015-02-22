<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Sip\Entity\Repositories\OrganismosRepository")
 * @ORM\Table(name="tbl_organismos")
 */
class Organismos {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $sigla;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $nombre;

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

    /**
     * @ORM\OneToMany(targetEntity="Organismos", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Organismos", inversedBy="children", fetch="EAGER")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    
    /**
     * @ORM\OneToMany(targetEntity="Solicitudes", mappedBy="organismo")
     */
    protected $solicitudes;
    
    
    
    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enlaces = new \Doctrine\Common\Collections\ArrayCollection();
        $this->solicitudes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
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

    public function getChildren() {
        return $this->children;
    }

    public function setChildren($children) {
        $this->children = $children;
    }

    public function getParent() {
        return $this->parent;
    }

    public function setParent($parent) {
        $this->parent = $parent;
    }

    public function getSolicitudes() {
        return $this->solicitudes;
    }

    public function setSolicitudes($solicitudes) {
        $this->solicitudes = $solicitudes;
    }

    public function getArrayCopy() {
        return get_object_vars($this);
    }

}