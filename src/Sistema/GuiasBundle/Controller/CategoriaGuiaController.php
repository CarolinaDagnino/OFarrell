<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\CategoriaGuia;
use Sistema\GuiasBundle\Form\CategoriaGuiaType;
use Sistema\GuiasBundle\Form\CategoriaGuiaFilterType;

/**
 * CategoriaGuia controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/categoriaguia")
 */
class CategoriaGuiaController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/CategoriaGuia.yml',
    );

    /**
     * Lists all CategoriaGuia entities.
     *
     * @Route("/", name="admin_categoriaguia")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new CategoriaGuiaFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new CategoriaGuia entity.
     *
     * @Route("/", name="admin_categoriaguia_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:CategoriaGuia:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new CategoriaGuiaType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new CategoriaGuia entity.
     *
     * @Route("/new", name="admin_categoriaguia_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new CategoriaGuiaType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a CategoriaGuia entity.
     *
     * @Route("/{id}", name="admin_categoriaguia_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing CategoriaGuia entity.
     *
     * @Route("/{id}/edit", name="admin_categoriaguia_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new CategoriaGuiaType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing CategoriaGuia entity.
     *
     * @Route("/{id}", name="admin_categoriaguia_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:CategoriaGuia:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new CategoriaGuiaType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a CategoriaGuia entity.
     *
     * @Route("/{id}", name="admin_categoriaguia_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a CategoriaGuia entity.
     *
     * @Route("/autocomplete-forms/get-categoria", name="CategoriaGuia_autocomplete_categoria")
     */
    public function getAutocompleteCategoria()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Categoria",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a CategoriaGuia entity.
     *
     * @Route("/autocomplete-forms/get-guia", name="CategoriaGuia_autocomplete_guia")
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