<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @ORM\Entity(repositoryClass="Application\Entity\Repositories\RegistroRepository")
 * @ORM\Table(name="app_registro_produccion")
 */
class Produccion {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
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
     * @ORM\Column(type="text", nullable=true)
     */
    protected $frecuencia;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $cpostal;

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

    public function getFrecuencia() {
        return $this->frecuencia;
    }

    public function getCpostal() {
        return $this->cpostal;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFrecuencia($frecuencia) {
        $this->frecuencia = $frecuencia;
    }

    public function setCpostal($cpostal) {
        $this->cpostal = $cpostal;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    

    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function getArrayCopy() {
        return get_object_vars($this);
    }


}
