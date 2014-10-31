<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\Localidad;
use Sistema\GuiasBundle\Form\LocalidadType;
use Sistema\GuiasBundle\Form\LocalidadFilterType;

/**
 * Localidad controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/localidad")
 */
class LocalidadController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/Localidad.yml',
    );

    /**
     * Lists all Localidad entities.
     *
     * @Route("/", name="admin_localidad")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new LocalidadFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Localidad entity.
     *
     * @Route("/", name="admin_localidad_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:Localidad:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new LocalidadType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Localidad entity.
     *
     * @Route("/new", name="admin_localidad_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new LocalidadType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Localidad entity.
     *
     * @Route("/{id}", name="admin_localidad_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Localidad entity.
     *
     * @Route("/{id}/edit", name="admin_localidad_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new LocalidadType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Localidad entity.
     *
     * @Route("/{id}", name="admin_localidad_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:Localidad:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new LocalidadType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Localidad entity.
     *
     * @Route("/{id}", name="admin_localidad_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Localidad entity.
     *
     * @Route("/autocomplete-forms/get-provincia", name="Localidad_autocomplete_provincia")
     */
    public function getAutocompleteProvincia()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Provincia",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Localidad entity.
     *
     * @Route("/autocomplete-forms/get-campos", name="Localidad_autocomplete_campos")
     */
    public function getAutocompleteCampo()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Campo",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}