<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaGuia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\CategoriaGuiaRepository")
 */
class CategoriaGuia
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
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;
     /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="categoriaguias")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    protected $categoria;
    /**
     * @ORM\ManyToOne(targetEntity="Guia", inversedBy="guiacategorias", cascade={"all"})
     * @ORM\JoinColumn(name="guia_id", referencedColumnName="id")
     */
    protected $guia;
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Categoria_x_Guia
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set categoria
     *
     * @param \Sistema\GuiasBundle\Entity\Categoria $categoria
     * @return Categoria_x_Guia
     */
    public function setCategoria(\Sistema\GuiasBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Sistema\GuiasBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set guia
     *
     * @param \Sistema\GuiasBundle\Entity\Guia $guia
     * @return CategoriaGuia
     */
    public function setGuia(\Sistema\GuiasBundle\Entity\Guia $guia = null)
    {
        $this->guia = $guia;

        return $this;
    }

    /**
     * Get guia
     *
     * @return \Sistema\GuiasBundle\Entity\Guia 
     */
    public function getGuia()
    {
        return $this->guia;
    }
    
    public function __toString() {
        return $this->categoria.' - Cantidad: '.$this->cantidad;
    }
    
    /**
     * Add guia
     *
     * @param \Sistema\GuiasBundle\Entity\Guia $guia
     * @return Guia
     */
    public function addGuia(\Sistema\GuiasBundle\Entity\Guia $guia)
    {
//        if (!$this->guia->contains($guia)) {
            $this->guia= $guia;
//        }
          return $this;
    }
}
