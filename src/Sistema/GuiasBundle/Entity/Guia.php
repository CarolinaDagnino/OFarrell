<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Guia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\GuiaRepository")
 */
class Guia
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="solamarca", type="boolean", nullable=true)
     */
    private $solamarca;
    
    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="guias")
     * @ORM\JoinColumn(name="vendedor_id", referencedColumnName="id")
     */
    protected $persona;
    
    /**
     * @ORM\ManyToOne(targetEntity="Finalidad", inversedBy="guias")
     * @ORM\JoinColumn(name="finalidad_id", referencedColumnName="id")
     */
    protected $finalidad;
    
    /**
     * @ORM\ManyToOne(targetEntity="Campo", inversedBy="guias")
     * @ORM\JoinColumn(name="comprador_id", referencedColumnName="id")
     */
    protected $campo;
    
    /**
     * @ORM\OneToMany(targetEntity="CategoriaGuia", mappedBy="guia", cascade={"all"})
     */
    protected $guiacategorias;
 
    public function __construct()
    {
        
        $this->guiacategorias = new ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Guia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set solamarca
     *
     * @param boolean $solamarca
     * @return Guia
     */
    public function setSolamarca($solamarca)
    {
        $this->solamarca = $solamarca;

        return $this;
    }

    /**
     * Get solamarca
     *
     * @return boolean 
     */
    public function getSolamarca()
    {
        return $this->solamarca;
    }

    /**
     * Set persona
     *
     * @param \Sistema\GuiasBundle\Entity\Persona $persona
     * @return Guia
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
     * Set finalidad
     *
     * @param \Sistema\GuiasBundle\Entity\Finalidad $finalidad
     * @return Guia
     */
    public function setFinalidad(\Sistema\GuiasBundle\Entity\Finalidad $finalidad = null)
    {
        $this->finalidad = $finalidad;

        return $this;
    }

    /**
     * Get finalidad
     *
     * @return \Sistema\GuiasBundle\Entity\Finalidad 
     */
    public function getFinalidad()
    {
        return $this->finalidad;
    }

    /**
     * Set campo
     *
     * @param \Sistema\GuiasBundle\Entity\Campo $campo
     * @return Guia
     */
    public function setCampo(\Sistema\GuiasBundle\Entity\Campo $campo = null)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return \Sistema\GuiasBundle\Entity\Campo 
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * Add guiacategorias
     *
     * @param \Sistema\GuiasBundle\Entity\CategoriaGuia $guiacategorias
     * @return Guia
     */
    public function addGuiacategoria(\Sistema\GuiasBundle\Entity\CategoriaGuia $guiacategorias)
    {
        $this->guiacategorias[] = $guiacategorias;

        return $this;
    }

    /**
     * Remove guiacategorias
     *
     * @param \Sistema\GuiasBundle\Entity\CategoriaGuia $guiacategorias
     */
    public function removeGuiacategoria(\Sistema\GuiasBundle\Entity\CategoriaGuia $guiacategorias)
    {
        $this->guiacategorias->removeElement($guiacategorias);
    }

    /**
     * Get guiacategorias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGuiacategorias()
    {
        return $this->guiacategorias;
    }
}
