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
            ->add('username', 'text' ,array('attr' => array('class' => 'form-control') ))
            ->add('nombre', 'text' ,array('attr' => array('class' => 'form-control') ))
            ->add('apellido', 'text' ,array('attr' => array('class' => 'form-control') ))
            ->add('numDocumento', 'number' ,array('attr' => array('class' => 'form-control') ))
            ->add('email', 'email' ,array('attr' => array('class' => 'form-control') ))
            ->add('telefono', 'number' ,array('attr' => array('class' => 'form-control') ))
            ->add('salarioBasico', 'text' ,array('attr' => array('class' => 'form-control') ))
            ->add('grupo' ,'entity', array(
                        'class' => 'SmartSolutionsAdmistradorBundle:Grupo', 
                        'property' => 'nombre', 
                        'required' => false,
                        'multiple' => false,
                        'expanded' => false,
                        'attr' => array('class' => 'form-control') ))
            ->add('password', 'password' ,array('attr' => array('class' => 'form-control'), 'required' => false))
            ->add('eps','entity', array('class' => 'SmartSolutionsAdmistradorBundle:Eps', 'property' => 'nombre', 'attr' => array('class' => 'form-control') ))
            ->add('pension','entity', array('class' => 'SmartSolutionsAdmistradorBundle:Pension', 'property' => 'nombre', 'attr' => array('class' => 'form-control') ))
            ->add('isactive', 'checkbox' , array('attr' => array('class' => 'form-control'), 'label' => 'Estado' ))
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
