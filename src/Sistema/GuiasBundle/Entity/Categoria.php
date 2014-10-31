<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Categoria
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\CategoriaRepository")
 */
class Categoria
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
     * @ORM\Column(name="codigo", type="string", length=5)
     */
    private $codigo;
    
    /**
     * @ORM\OneToMany(targetEntity="CategoriaGuia", mappedBy="categoria")
     */
    protected $categoriaguias;
 
    public function __construct()
    {
        $this->categoriaguias = new ArrayCollection();
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
     * @return Categoria
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
     * Set codigo
     *
     * @param string $codigo
     * @return Categoria
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Add categoriaguias
     *
     * @param \Sistema\GuiasBundle\Entity\Categoria_x_Guia $categoriaguias
     * @return Categoria
     */
    public function addCategoriaguia(\Sistema\GuiasBundle\Entity\Categoria_x_Guia $categoriaguias)
    {
        $this->categoriaguias[] = $categoriaguias;

        return $this;
    }

    /**
     * Remove categoriaguias
     *
     * @param \Sistema\GuiasBundle\Entity\Categoria_x_Guia $categoriaguias
     */
    public function removeCategoriaguia(\Sistema\GuiasBundle\Entity\Categoria_x_Guia $categoriaguias)
    {
        $this->categoriaguias->removeElement($categoriaguias);
    }

    /**
     * Get categoriaguias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoriaguias()
    {
        return $this->categoriaguias;
    }
    
    public function __toString() {
        return $this->nombre;
    }
}
