<?php

namespace Sistema\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\GuiasBundle\Entity\Guia;
use Sistema\GuiasBundle\Form\GuiaType;
use Sistema\GuiasBundle\Form\GuiaFilterType;
use Ps\PdfBundle\Annotation\Pdf;

/**
 * Guia controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/guia")
 */
class GuiaController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/GuiasBundle/Resources/config/Guia.yml',
    );

    /**
     * Lists all Guia entities.
     *
     * @Route("/", name="admin_guia")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new GuiaFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Guia entity.
     *
     * @Route("/", name="admin_guia_create")
     * @Method("POST")
     * @Template("SistemaGuiasBundle:Guia:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new GuiaType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Guia entity.
     *
     * @Route("/new", name="admin_guia_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new GuiaType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Guia entity.
     *
     * @Route("/{id}", name="admin_guia_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Guia entity.
     *
     * @Route("/{id}/edit", name="admin_guia_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new GuiaType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Guia entity.
     *
     * @Route("/{id}", name="admin_guia_update")
     * @Method("PUT")
     * @Template("SistemaGuiasBundle:Guia:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new GuiaType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Guia entity.
     *
     * @Route("/{id}", name="admin_guia_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Guia entity.
     *
     * @Route("/autocomplete-forms/get-persona", name="Guia_autocomplete_persona")
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
     * Autocomplete a Guia entity.
     *
     * @Route("/autocomplete-forms/get-finalidad", name="Guia_autocomplete_finalidad")
     */
    public function getAutocompleteFinalidad()
    {
        $options = array(
            'repository' => "SistemaGuiasBundle:Finalidad",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Guia entity.
     *
     * @Route("/autocomplete-forms/get-campo", name="Guia_autocomplete_campo")
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
    * @Pdf()
    * 
    * @Route("/pdf/{id}.{_format}", name="admin_guia_pdf")
    * @Template()
    */
   public function pdfAction($id)
   {
//       $format = $this->get('request')->get('_format');
//
//       return $this->render(sprintf('SistemaGuiasBundle:ProvinciaController:helloAction.%s.twig', $format), array(
//           'id' => $id,
//       ));
//       return array('id' => $id);
       $config = $this->getConfig();
       $em = $this->getDoctrine()->getManager();

       $entity = $em->getRepository($config['repository'])->find($id);
       
//       $nombre = $entity->getNombre();
//       
//       return array('nombre' => $nombre);
       return $entity;
   }
}