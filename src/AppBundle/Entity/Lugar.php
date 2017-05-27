<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\BaseClass;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Lugar
 *
 * @Vich\Uploadable
 * @ORM\Table(name="lugar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LugarRepository")
 */
class Lugar extends BaseClass {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nombre", type="string", length=255)
	 */
	private $nombre;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="resumen", type="text", nullable=true)
	 */
	private $resumen;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="cuerpo", type="text", nullable=true)
	 */
	private $cuerpo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="tipo", type="string", length=50)
	 */
	private $tipo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
	 */
	private $direccion;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="latitud", type="string", length=25, nullable=true)
	 */
	private $latitud;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="longitud", type="string", length=25, nullable=true)
	 */
	private $longitud;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
	 */
	private $telefono;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="celular", type="string", length=50, nullable=true)
	 */
	private $celular;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=255, nullable=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
	 */
	private $facebook;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
	 */
	private $twitter;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="instagram", type="string", length=255, nullable=true)
	 */
	private $instagram;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="youtube", type="string", length=255, nullable=true)
	 */
	private $youtube;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fechaEventoInicio", type="datetime", nullable=true)
	 */
	private $fechaEventoInicio;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fechaEventoFin", type="datetime", nullable=true)
	 */
	private $fechaEventoFin;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fechaVisibleDesde", type="datetime", nullable=true)
	 */
	private $fechaVisibleDesde;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fechaVisibleHasta", type="datetime", nullable=true)
	 */
	private $fechaVisibleHasta;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoria")
	 * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", nullable=true)
	 */
	private $categoria;

	/**
	 * NOTE: This is not a mapped field of entity metadata, just a simple property.
	 *
	 * @Vich\UploadableField(mapping="lugar_image", fileNameProperty="imageName")
	 *
	 * @var File
	 *
	 * @Assert\File(mimeTypes={ "image/*" })
	 */
	private $imageFile;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 *
	 * @var string
	 *
	 */
	private $imageName;

	/**
	 * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
	 * of 'UploadedFile' is injected into this setter to trigger the  update. If this
	 * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
	 * must be able to accept an instance of 'File' as the bundle will inject one here
	 * during Doctrine hydration.
	 *
	 * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
	 *
	 * @return Product
	 */
	public function setImageFile( File $image = null ) {
		$this->imageFile = $image;
		if ( $image ) {
			// It is required that at least one field changes if you are using doctrine
			// otherwise the event listeners won't be called and the file is lost
			$this->fechaActualizacion = new \DateTime( 'now' );
		}

		return $this;
	}

	/**
	 * @return File
	 */
	public function getImageFile() {
		return $this->imageFile;
	}

	/**
	 * @param string $imageName
	 *
	 * @return Product
	 */
	public function setImageName( $imageName ) {
		$this->imageName = $imageName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getImageName() {
		return $this->imageName;
	}

	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set nombre
	 *
	 * @param string $nombre
	 *
	 * @return Lugar
	 */
	public function setNombre( $nombre ) {
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get nombre
	 *
	 * @return string
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * Set resumen
	 *
	 * @param string $resumen
	 *
	 * @return Lugar
	 */
	public function setResumen( $resumen ) {
		$this->resumen = $resumen;

		return $this;
	}

	/**
	 * Get resumen
	 *
	 * @return string
	 */
	public function getResumen() {
		return $this->resumen;
	}

	/**
	 * Set cuerpo
	 *
	 * @param string $cuerpo
	 *
	 * @return Lugar
	 */
	public function setCuerpo( $cuerpo ) {
		$this->cuerpo = $cuerpo;

		return $this;
	}

	/**
	 * Get cuerpo
	 *
	 * @return string
	 */
	public function getCuerpo() {
		return $this->cuerpo;
	}

	/**
	 * Set tipo
	 *
	 * @param string $tipo
	 *
	 * @return Lugar
	 */
	public function setTipo( $tipo ) {
		$this->tipo = $tipo;

		return $this;
	}

	/**
	 * Get tipo
	 *
	 * @return string
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * Set fechaEventoInicio
	 *
	 * @param \DateTime $fechaEventoInicio
	 *
	 * @return Lugar
	 */
	public function setFechaEventoInicio( $fechaEventoInicio ) {
		$this->fechaEventoInicio = $fechaEventoInicio;

		return $this;
	}

	/**
	 * Get fechaEventoInicio
	 *
	 * @return \DateTime
	 */
	public function getFechaEventoInicio() {
		return $this->fechaEventoInicio;
	}

	/**
	 * Set fechaEventoFin
	 *
	 * @param \DateTime $fechaEventoFin
	 *
	 * @return Lugar
	 */
	public function setFechaEventoFin( $fechaEventoFin ) {
		$this->fechaEventoFin = $fechaEventoFin;

		return $this;
	}

	/**
	 * Get fechaEventoFin
	 *
	 * @return \DateTime
	 */
	public function getFechaEventoFin() {
		return $this->fechaEventoFin;
	}

	/**
	 * Set fechaVisibleDesde
	 *
	 * @param \DateTime $fechaVisibleDesde
	 *
	 * @return Lugar
	 */
	public function setFechaVisibleDesde( $fechaVisibleDesde ) {
		$this->fechaVisibleDesde = $fechaVisibleDesde;

		return $this;
	}

	/**
	 * Get fechaVisibleDesde
	 *
	 * @return \DateTime
	 */
	public function getFechaVisibleDesde() {
		return $this->fechaVisibleDesde;
	}

	/**
	 * Set fechaVisibleHasta
	 *
	 * @param \DateTime $fechaVisibleHasta
	 *
	 * @return Lugar
	 */
	public function setFechaVisibleHasta( $fechaVisibleHasta ) {
		$this->fechaVisibleHasta = $fechaVisibleHasta;

		return $this;
	}

	/**
	 * Get fechaVisibleHasta
	 *
	 * @return \DateTime
	 */
	public function getFechaVisibleHasta() {
		return $this->fechaVisibleHasta;
	}

	/**
	 * Set direccion
	 *
	 * @param string $direccion
	 *
	 * @return Lugar
	 */
	public function setDireccion( $direccion ) {
		$this->direccion = $direccion;

		return $this;
	}

	/**
	 * Get direccion
	 *
	 * @return string
	 */
	public function getDireccion() {
		return $this->direccion;
	}

	/**
	 * Set latitud
	 *
	 * @param string $latitud
	 *
	 * @return Lugar
	 */
	public function setLatitud( $latitud ) {
		$this->latitud = $latitud;

		return $this;
	}

	/**
	 * Get latitud
	 *
	 * @return string
	 */
	public function getLatitud() {
		return $this->latitud;
	}

	/**
	 * Set longitud
	 *
	 * @param string $longitud
	 *
	 * @return Lugar
	 */
	public function setLongitud( $longitud ) {
		$this->longitud = $longitud;

		return $this;
	}

	/**
	 * Get longitud
	 *
	 * @return string
	 */
	public function getLongitud() {
		return $this->longitud;
	}

	/**
	 * Set telefono
	 *
	 * @param string $telefono
	 *
	 * @return Lugar
	 */
	public function setTelefono( $telefono ) {
		$this->telefono = $telefono;

		return $this;
	}

	/**
	 * Get telefono
	 *
	 * @return string
	 */
	public function getTelefono() {
		return $this->telefono;
	}

	/**
	 * Set celular
	 *
	 * @param string $celular
	 *
	 * @return Lugar
	 */
	public function setCelular( $celular ) {
		$this->celular = $celular;

		return $this;
	}

	/**
	 * Get celular
	 *
	 * @return string
	 */
	public function getCelular() {
		return $this->celular;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 *
	 * @return Lugar
	 */
	public function setEmail( $email ) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Set facebook
	 *
	 * @param string $facebook
	 *
	 * @return Lugar
	 */
	public function setFacebook( $facebook ) {
		$this->facebook = $facebook;

		return $this;
	}

	/**
	 * Get facebook
	 *
	 * @return string
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * Set twitter
	 *
	 * @param string $twitter
	 *
	 * @return Lugar
	 */
	public function setTwitter( $twitter ) {
		$this->twitter = $twitter;

		return $this;
	}

	/**
	 * Get twitter
	 *
	 * @return string
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * Set instagram
	 *
	 * @param string $instagram
	 *
	 * @return Lugar
	 */
	public function setInstagram( $instagram ) {
		$this->instagram = $instagram;

		return $this;
	}

	/**
	 * Get instagram
	 *
	 * @return string
	 */
	public function getInstagram() {
		return $this->instagram;
	}

	/**
	 * Set youtube
	 *
	 * @param string $youtube
	 *
	 * @return Lugar
	 */
	public function setYoutube( $youtube ) {
		$this->youtube = $youtube;

		return $this;
	}

	/**
	 * Get youtube
	 *
	 * @return string
	 */
	public function getYoutube() {
		return $this->youtube;
	}


	/**
	 * Set categoria
	 *
	 * @param \AppBundle\Entity\Categoria $categoria
	 *
	 * @return Lugar
	 */
	public function setCategoria( \AppBundle\Entity\Categoria $categoria = null ) {
		$this->categoria = $categoria;

		return $this;
	}

	/**
	 * Get categoria
	 *
	 * @return \AppBundle\Entity\Categoria
	 */
	public function getCategoria() {
		return $this->categoria;
	}

	/**
	 * Set fechaCreacion
	 *
	 * @param \DateTime $fechaCreacion
	 *
	 * @return Lugar
	 */
	public function setFechaCreacion( $fechaCreacion ) {
		$this->fechaCreacion = $fechaCreacion;

		return $this;
	}

	/**
	 * Set fechaActualizacion
	 *
	 * @param \DateTime $fechaActualizacion
	 *
	 * @return Lugar
	 */
	public function setFechaActualizacion( $fechaActualizacion ) {
		$this->fechaActualizacion = $fechaActualizacion;

		return $this;
	}

	/**
	 * Set creadoPor
	 *
	 * @param \UsuarioBundle\Entity\Usuario $creadoPor
	 *
	 * @return Lugar
	 */
	public function setCreadoPor( \UsuarioBundle\Entity\Usuario $creadoPor = null ) {
		$this->creadoPor = $creadoPor;

		return $this;
	}

	/**
	 * Set actualizadoPor
	 *
	 * @param \UsuarioBundle\Entity\Usuario $actualizadoPor
	 *
	 * @return Lugar
	 */
	public function setActualizadoPor( \UsuarioBundle\Entity\Usuario $actualizadoPor = null ) {
		$this->actualizadoPor = $actualizadoPor;

		return $this;
	}
}
