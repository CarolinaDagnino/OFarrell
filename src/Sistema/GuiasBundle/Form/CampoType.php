<?php

namespace Sistema\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CampoType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class CampoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('file', 'mws_field_file', array(
                    'required'  => false,
                    'file_path' => 'webPath',
                    'label'     => 'Marca'
                    ))
            ->add('localidad', 'select2', array(
                'class' => 'Sistema\GuiasBundle\Entity\Localidad',
                'url'   => 'Campo_autocomplete_localidad',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
            ->add('persona', 'select2', array(
                'class' => 'Sistema\GuiasBundle\Entity\Persona',
                'url'   => 'Campo_autocomplete_persona',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
//            ->add('guias', 'select2', array(
//                'class' => 'Sistema\GuiasBundle\Entity\Guia',
//                'url'   => 'Campo_autocomplete_guias',
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
            'data_class' => 'Sistema\GuiasBundle\Entity\Campo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_guiasbundle_campo';
    }
}
