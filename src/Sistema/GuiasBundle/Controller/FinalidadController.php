<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\Finalidad;
use Sistema\GuiasBundle\Form\FinalidadType;
use Sistema\GuiasBundle\Form\FinalidadFilterType;

/**
 * Finalidad controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/finalidad")
 */
class FinalidadController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/Finalidad.yml',
    );

    /**
     * Lists all Finalidad entities.
     *
     * @Route("/", name="admin_finalidad")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new FinalidadFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Finalidad entity.
     *
     * @Route("/", name="admin_finalidad_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:Finalidad:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new FinalidadType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Finalidad entity.
     *
     * @Route("/new", name="admin_finalidad_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new FinalidadType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Finalidad entity.
     *
     * @Route("/{id}", name="admin_finalidad_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Finalidad entity.
     *
     * @Route("/{id}/edit", name="admin_finalidad_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new FinalidadType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Finalidad entity.
     *
     * @Route("/{id}", name="admin_finalidad_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:Finalidad:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new FinalidadType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Finalidad entity.
     *
     * @Route("/{id}", name="admin_finalidad_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Finalidad entity.
     *
     * @Route("/autocomplete-forms/get-guias", name="Finalidad_autocomplete_guias")
     */
    public function getAutocompleteGuia()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Guia",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}