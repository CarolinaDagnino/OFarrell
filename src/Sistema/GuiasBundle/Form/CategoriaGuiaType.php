<?php

namespace Sistema\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CategoriaGuiaType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class CategoriaGuiaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad')
            ->add('categoria', 'select2', array(
                'class' => 'Sistema\GuiasBundle\Entity\Categoria',
                'url'   => 'CategoriaGuia_autocomplete_categoria',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
            ->add('guia', 'select2', array(
                'class' => 'Sistema\GuiasBundle\Entity\Guia',
                'url'   => 'CategoriaGuia_autocomplete_guia',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\GuiasBundle\Entity\CategoriaGuia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_guiasbundle_categoriaguia';
    }
}
