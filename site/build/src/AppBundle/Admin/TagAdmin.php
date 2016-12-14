<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

use AppBundle\Repository\TagRepository;

class TagAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {

      $tagRepo = $this->getConfigurationPool()->getContainer()->get('repository.tag');
      $types = $tagRepo->findTypes();
      $choices = array();
      foreach ($types as $type) {
        $choices[$type] = $type;
      }

        $formMapper
          ->with('General')
            ->add('title', 'text')
            ->add('slug', 'text', array('required' => false))
            ->add('type', 'choice', array(
              'choices' => $choices
              ))
            ->add('order', 'text', array('required' => false, 'label' => 'Display Order (Higher Prioritised)'))
            ->add('level', 'text', array('required' => false, 'label' => 'Used (primarily) for generating structured menus'))
            ->add('longValue', 'textarea', array('required' => false, 'attr'=>array('class'=>'ckeditor')))
          ->end()
          ->with('Options')
          ->add('keyPairs', 'sonata_type_collection', array('required' => false, 'by_reference' => false), array(
              'edit' => 'inline',
              'inline' => 'table',
              'allow_delete'  => true
          ))
          ->end()
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
      $tagRepo = $this->getConfigurationPool()->getContainer()->get('repository.tag');
      $types = $tagRepo->findTypes();
      $choices = array();
      foreach ($types as $type) {
        $choices[$type] = $type;
      }

      $datagridMapper
      ->add('type', 'doctrine_mongo_choice', [], 'choice',
          array(
          'choices' => $choices))
      ;
    }
    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('title')
          ->add('slug')
          ->add('type')
          ->add('order')
          ->add('level')
        ;
    }

}
