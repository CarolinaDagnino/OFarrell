<?php

namespace Sistema\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * PersonaType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nya')
            ->add('cuit')
            ->add('domicilio')
//            ->add('campos', 'select2', array(
//                'class' => 'Sistema\GuiasBundle\Entity\Campo',
//                'url'   => 'Persona_autocomplete_campos',
//                'configs' => array(
//                    'multiple' => true,//required true or false
//                    'width'    => 'off',
//                ),
//                'attr' => array(
//                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
//                )
//            ))
//            ->add('guias', 'select2', array(
//                'class' => 'Sistema\GuiasBundle\Entity\Guia',
//                'url'   => 'Persona_autocomplete_guias',
//                'configs' => array(
//                    'multiple' => true,//required true or false
//                    'width'    => 'off',
//                ),
//                'attr' => array(
//                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
//                )
//            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\GuiasBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_guiasbundle_persona';
    }
}
