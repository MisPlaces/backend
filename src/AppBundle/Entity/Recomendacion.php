<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\BaseClass;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recomendacion
 *
 * @ORM\Table(name="recomendacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecomendacionRepository")
 */
class Recomendacion extends BaseClass {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="me_gusta", type="boolean", nullable=true)
	 */
	private $meGusta;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="comentario", type="text", nullable=true)
	 */
	private $comentario;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Persona")
	 * @ORM\JoinColumn(name="persona_id", referencedColumnName="id", nullable=true)
	 */
	private $persona;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Lugar")
	 * @ORM\JoinColumn(name="lugar_id", referencedColumnName="id", nullable=true)
	 */
	private $lugar;


	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set meGusta
	 *
	 * @param boolean $meGusta
	 *
	 * @return Recomendacion
	 */
	public function setMeGusta( $meGusta ) {
		$this->meGusta = $meGusta;

		return $this;
	}

	/**
	 * Get meGusta
	 *
	 * @return bool
	 */
	public function getMeGusta() {
		return $this->meGusta;
	}

	/**
	 * Set comentario
	 *
	 * @param string $comentario
	 *
	 * @return Recomendacion
	 */
	public function setComentario( $comentario ) {
		$this->comentario = $comentario;

		return $this;
	}

	/**
	 * Get comentario
	 *
	 * @return string
	 */
	public function getComentario() {
		return $this->comentario;
	}

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Recomendacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     *
     * @return Recomendacion
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\Persona $persona
     *
     * @return Recomendacion
     */
    public function setPersona(\AppBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \AppBundle\Entity\Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set lugar
     *
     * @param \AppBundle\Entity\Lugar $lugar
     *
     * @return Recomendacion
     */
    public function setLugar(\AppBundle\Entity\Lugar $lugar = null)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return \AppBundle\Entity\Lugar
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set creadoPor
     *
     * @param \UsuarioBundle\Entity\Usuario $creadoPor
     *
     * @return Recomendacion
     */
    public function setCreadoPor(\UsuarioBundle\Entity\Usuario $creadoPor = null)
    {
        $this->creadoPor = $creadoPor;

        return $this;
    }

    /**
     * Set actualizadoPor
     *
     * @param \UsuarioBundle\Entity\Usuario $actualizadoPor
     *
     * @return Recomendacion
     */
    public function setActualizadoPor(\UsuarioBundle\Entity\Usuario $actualizadoPor = null)
    {
        $this->actualizadoPor = $actualizadoPor;

        return $this;
    }
}
