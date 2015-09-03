<?php

namespace SmartSolutions\AdmistradorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('nombre')
            ->add('apellido')
            ->add('numDocumento')
            ->add('email')
            ->add('telefono')
            ->add('salarioBasico')
            ->add('rol')
            ->add('salt')
            ->add('password')
            ->add('isactive')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SmartSolutions\AdmistradorBundle\Entity\Users'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smartsolutions_admistradorbundle_users';
    }
}
