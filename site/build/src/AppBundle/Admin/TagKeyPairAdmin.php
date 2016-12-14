<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
/*
 * Tag Key Pairs admin
 *
 * Default sort order
 * Admin list display options
 * Edit form configuration
 *
 */
class TagKeyPairAdmin extends Admin
{
  /*
   * Admin list display options
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->add('value')
      ->add('key')
    ;
  }
  /*
   * List filters
   */
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
      $datagridMapper
        ->add('key')
      ;
  }
  /*
   * Edit form configuration
   */
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->with('General')
        ->add('key', 'text', array('label' => 'Key'))
        ->add('value', 'text', array('label' => 'Value'))
      ->end()
    ;
  }
}
