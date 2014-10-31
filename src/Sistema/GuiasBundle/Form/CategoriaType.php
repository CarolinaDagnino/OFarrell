<?php

namespace Sistema\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CategoriaType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class CategoriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('codigo')
//            ->add('categoriaguias', 'select2', array(
//                'class' => 'Sistema\GuiasBundle\Entity\Categoria_x_Guia',
//                'url'   => 'Categoria_autocomplete_categoriaguias',
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
            'data_class' => 'Sistema\GuiasBundle\Entity\Categoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_guiasbundle_categoria';
    }
}
