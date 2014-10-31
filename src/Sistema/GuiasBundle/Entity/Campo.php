<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MWSimple\Bundle\AdminCrudBundle\Entity\BaseFile;

/**
 * Campo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\CampoRepository")
 */
class Campo extends BaseFile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=150)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;
    /**
     * @ORM\ManyToOne(targetEntity="Localidad", inversedBy="campos")
     * @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     */
    protected $localidad;
    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="campos")
     * @ORM\JoinColumn(name="duenio_id", referencedColumnName="id")
     */
    protected $persona;
     /**
     * @ORM\OneToMany(targetEntity="Guia", mappedBy="comprador_id")
     */
    protected $guias;
 
    public function __construct()
    {
        $this->guias = new ArrayCollection();
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Campo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Campo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Campo
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set localidad
     *
     * @param \Sistema\GuiasBundle\Entity\Localidad $localidad
     * @return Campo
     */
    public function setLocalidad(\Sistema\GuiasBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return \Sistema\GuiasBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set persona
     *
     * @param \Sistema\GuiasBundle\Entity\Persona $persona
     * @return Campo
     */
    public function setPersona(\Sistema\GuiasBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Sistema\GuiasBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Add guias
     *
     * @param \Sistema\GuiasBundle\Entity\Guia $guias
     * @return Campo
     */
    public function addGuia(\Sistema\GuiasBundle\Entity\Guia $guias)
    {
        $this->guias[] = $guias;

        return $this;
    }

    /**
     * Remove guias
     *
     * @param \Sistema\GuiasBundle\Entity\Guia $guias
     */
    public function removeGuia(\Sistema\GuiasBundle\Entity\Guia $guias)
    {
        $this->guias->removeElement($guias);
    }

    /**
     * Get guias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGuias()
    {
        return $this->guias;
    }
    
    public function __toString() {
        return $this->nombre;
    }
    
    public function getUploadDir()
    {
        $this->uploadDir = 'uploads\files';
        return $this->uploadDir;
    }
}
