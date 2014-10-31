<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\Campo;
use Sistema\GuiasBundle\Form\CampoType;
use Sistema\GuiasBundle\Form\CampoFilterType;

/**
 * Campo controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/campo")
 */
class CampoController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/Campo.yml',
    );

    /**
     * Lists all Campo entities.
     *
     * @Route("/", name="admin_campo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new CampoFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Campo entity.
     *
     * @Route("/", name="admin_campo_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:Campo:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new CampoType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Campo entity.
     *
     * @Route("/new", name="admin_campo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new CampoType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Campo entity.
     *
     * @Route("/{id}", name="admin_campo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Campo entity.
     *
     * @Route("/{id}/edit", name="admin_campo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new CampoType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Campo entity.
     *
     * @Route("/{id}", name="admin_campo_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:Campo:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new CampoType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Campo entity.
     *
     * @Route("/{id}", name="admin_campo_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Campo entity.
     *
     * @Route("/autocomplete-forms/get-localidad", name="Campo_autocomplete_localidad")
     */
    public function getAutocompleteLocalidad()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Localidad",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Campo entity.
     *
     * @Route("/autocomplete-forms/get-persona", name="Campo_autocomplete_persona")
     */
    public function getAutocompletePersona()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Persona",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Campo entity.
     *
     * @Route("/autocomplete-forms/get-guias", name="Campo_autocomplete_guias")
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