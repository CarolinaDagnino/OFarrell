<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Localidad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\LocalidadRepository")
 */
class Localidad
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
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="localidades")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */
    protected $provincia;
    /**
     * @ORM\OneToMany(targetEntity="Campo", mappedBy="localidad")
     */
    protected $campos;
 
    public function __construct()
    {
        $this->campos = new ArrayCollection();
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
     * @return Localidad
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
     * Get provincia
     *
     * @return array
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
    
    /**
     * Get Campos
     *
     * @return array
     */
    public function getCampos()
    {
        return $this->campos;
    }

    /**
     * Set provincia
     *
     * @param \Sistema\GuiasBundle\Entity\Provincia $provincia
     * @return Localidad
     */
    public function setProvincia(\Sistema\GuiasBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Add campos
     *
     * @param \Sistema\GuiasBundle\Entity\Campo $campos
     * @return Localidad
     */
    public function addCampo(\Sistema\GuiasBundle\Entity\Campo $campos)
    {
        $this->campos[] = $campos;

        return $this;
    }

    /**
     * Remove campos
     *
     * @param \Sistema\GuiasBundle\Entity\Campo $campos
     */
    public function removeCampo(\Sistema\GuiasBundle\Entity\Campo $campos)
    {
        $this->campos->removeElement($campos);
    }
    
    public function __toString() {
        return $this->nombre;
    }
}
