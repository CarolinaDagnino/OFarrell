<?php

namespace Sistema\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * FinalidadType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class FinalidadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
//            ->add('guias', 'select2', array(
//                'class' => 'Sistema\GuiasBundle\Entity\Guia',
//                'url'   => 'Finalidad_autocomplete_guias',
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
            'data_class' => 'Sistema\GuiasBundle\Entity\Finalidad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_guiasbundle_finalidad';
    }
}
