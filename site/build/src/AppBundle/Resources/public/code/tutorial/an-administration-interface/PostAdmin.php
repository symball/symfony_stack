<?php
// # src/AppBundle/Admin/PostAdmin.php
namespace AppBundle\Admin;

// The base Sonata object
use Sonata\AdminBundle\Admin\AbstractAdmin;
// Used for including CRUD
use Sonata\AdminBundle\Datagrid\ListMapper;
// The Edit form
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends AbstractAdmin
{
   // Edit view
   protected function configureFormFields(FormMapper $formMapper)
   {
      $formMapper
  	  ->add('title', 'text')
  	  ->add('summary', 'text')
  	  ->add('content', 'text');
   }
   // CRUD view
   protected function configureListFields(ListMapper $listMapper)
   {
      $listMapper->addIdentifier('title');
   }
}
