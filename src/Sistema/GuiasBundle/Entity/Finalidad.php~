<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Finalidad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\FinalidadRepository")
 */
class Finalidad
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
     * @ORM\OneToMany(targetEntity="Guia", mappedBy="finalidad_id")
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
     * @return Finalidad
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
     * Add guias
     *
     * @param \Sistema\GuiasBundle\Entity\Guia $guias
     * @return Finalidad
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
}
