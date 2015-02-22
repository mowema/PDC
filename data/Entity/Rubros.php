<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="tbl_rubros")
 */
class Rubros {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $nombre;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */

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

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $state;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
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

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

}