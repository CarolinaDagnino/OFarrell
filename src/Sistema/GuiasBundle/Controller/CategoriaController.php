<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\Categoria;
use Sistema\GuiasBundle\Form\CategoriaType;
use Sistema\GuiasBundle\Form\CategoriaFilterType;

/**
 * Categoria controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/categoria")
 */
class CategoriaController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/Categoria.yml',
    );

    /**
     * Lists all Categoria entities.
     *
     * @Route("/", name="admin_categoria")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new CategoriaFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Categoria entity.
     *
     * @Route("/", name="admin_categoria_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:Categoria:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new CategoriaType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Categoria entity.
     *
     * @Route("/new", name="admin_categoria_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new CategoriaType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Categoria entity.
     *
     * @Route("/{id}", name="admin_categoria_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Categoria entity.
     *
     * @Route("/{id}/edit", name="admin_categoria_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new CategoriaType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Categoria entity.
     *
     * @Route("/{id}", name="admin_categoria_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:Categoria:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new CategoriaType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Categoria entity.
     *
     * @Route("/{id}", name="admin_categoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Categoria entity.
     *
     * @Route("/autocomplete-forms/get-categoriaguias", name="Categoria_autocomplete_categoriaguias")
     */
    public function getAutocompleteCategoria_x_Guia()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Categoria_x_Guia",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}