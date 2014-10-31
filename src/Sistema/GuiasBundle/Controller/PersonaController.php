<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\Persona;
use Sistema\GuiasBundle\Form\PersonaType;
use Sistema\GuiasBundle\Form\PersonaFilterType;

/**
 * Persona controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/persona")
 */
class PersonaController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/Persona.yml',
    );

    /**
     * Lists all Persona entities.
     *
     * @Route("/", name="admin_persona")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new PersonaFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Persona entity.
     *
     * @Route("/", name="admin_persona_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:Persona:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new PersonaType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Persona entity.
     *
     * @Route("/new", name="admin_persona_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new PersonaType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Persona entity.
     *
     * @Route("/{id}", name="admin_persona_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Persona entity.
     *
     * @Route("/{id}/edit", name="admin_persona_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new PersonaType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Persona entity.
     *
     * @Route("/{id}", name="admin_persona_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:Persona:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new PersonaType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Persona entity.
     *
     * @Route("/{id}", name="admin_persona_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Persona entity.
     *
     * @Route("/autocomplete-forms/get-campos", name="Persona_autocomplete_campos")
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

    /**
     * Autocomplete a Persona entity.
     *
     * @Route("/autocomplete-forms/get-guias", name="Persona_autocomplete_guias")
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