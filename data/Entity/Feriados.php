<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Sip\Entity\Repositories\FeriadosRepository")
 * @ORM\Table(name="tbl_feriados")
 */
class Feriados {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $concepto;

     /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    protected $fecha;
    
    
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

    public function getConcepto() {
        return $this->concepto;
    }

    public function setConcepto($concepto) {
        $this->concepto = $concepto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
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