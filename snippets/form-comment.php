<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('email', 'text', array('label' => false, 'attr' => array('placeholder' => 'Email Address...')))
          ->add('comment', 'textarea', array('label' => false, 'attr' => array('placeholder' => 'Comment...', 'rows' => 4)))
          ->add('Send', 'submit', array('attr' => array('class' => 'button expand')))
        ;
    }

    public function getName()
    {
      return 'comment';
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Document\Comment',
        ));
    }
}
