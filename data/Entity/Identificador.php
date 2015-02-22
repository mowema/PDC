<?php

namespace Sip\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
@ORM\Entity(repositoryClass="Sip\Entity\Repositories\IdentificadorRepository")
 * @ORM\Table(name="tbl_identificador")
 */
class Identificador {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Casos", mappedBy="identificador")
     */
    protected $caso;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $sigla;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numero;

    /**
     * @ORM\Column(type="integer")
     */
    protected $anio;

    
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

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function setAnio($anio) {
        $this->anio = $anio;
    }


}