<?php

namespace Sistema\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * GuiaType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class GuiaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('fecha', 'bootstrapdatetime', array(
//                'required'   => true,
//                'label'      => 'Fecha',
//                'label_attr' => array(
//                    'class' => 'col-lg-2 col-md-2 col-sm-2',
//                ),
//                'widget_type' => 'date',
//            ))
            ->add('fecha')
            ->add('solamarca')
            ->add('persona', 'select2', array(
                'label'      => 'Persona/Origen',
                'class' => 'Sistema\GuiasBundle\Entity\Persona',
                'url'   => 'Guia_autocomplete_persona',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
            ->add('finalidad', 'select2', array(
                'class' => 'Sistema\GuiasBundle\Entity\Finalidad',
                'url'   => 'Guia_autocomplete_finalidad',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
            ->add('campo', 'select2', array(
                'class' => 'Sistema\GuiasBundle\Entity\Campo',
                'url'   => 'Guia_autocomplete_campo',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
            ->add('guiacategorias', 'collection', array(
                'label'        => ' ',
                'type'         => new CategoriaGuiaType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\GuiasBundle\Entity\Guia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_guiasbundle_guia';
    }
}
