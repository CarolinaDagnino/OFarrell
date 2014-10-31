<?php

namespace Sistema\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Provincia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\GuiasBundle\Entity\ProvinciaRepository")
 */
class Provincia
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
     * @ORM\OneToMany(targetEntity="Localidad", mappedBy="provincia")
     */
    protected $localidades;
 
    public function __construct()
    {
        $this->localidades = new ArrayCollection();
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
     * @return Provincia
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
     * Get Localidades
     *
     * @return array
     */
    public function getLocalidades()
    {
        return $this->localidades;
    }

    
    
    
    /**
     * Add localidades
     *
     * @param \Sistema\GuiasBundle\Entity\Localidad $localidades
     * @return Provincia
     */
    public function addLocalidade(\Sistema\GuiasBundle\Entity\Localidad $localidades)
    {
        $this->localidades[] = $localidades;

        return $this;
    }

    /**
     * Remove localidades
     *
     * @param \Sistema\GuiasBundle\Entity\Localidad $localidades
     */
    public function removeLocalidade(\Sistema\GuiasBundle\Entity\Localidad $localidades)
    {
        $this->localidades->removeElement($localidades);
    }
    
    public function __toString() {
        return $this->nombre;
    }
}
