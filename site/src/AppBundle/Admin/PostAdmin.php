<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends AbstractAdmin
{
 // Fields to be shown on create/edit forms
 protected function configureFormFields(FormMapper $formMapper)
 {

     $formMapper
     ->with('Identifying')
       ->add('title', 'text', array('label' => 'Title'))
       ->add('summary', 'textarea', array('required' => false))
     ->end()
     ->with('Content')
        ->add('content', 'textarea', array('label' => '', 'attr'=>array('class'=>'ckeditor')))
     ->end()
   ;
 }

 // Fields to be shown on lists
 protected function configureListFields(ListMapper $listMapper)
 {
     $listMapper
       ->addIdentifier('title')
     ;
 }

}
