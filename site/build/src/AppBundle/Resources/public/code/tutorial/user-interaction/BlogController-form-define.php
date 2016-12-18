<?php
// src/AppBundle/Controller/PostController.php

// Include the Data Entity
use AppBundle\Entity\Comment;
// Include functionality for form submission
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogController extends Controller
{
  /**
   * @Route("/blog/{id}", name="blog_singular")
   */
  public function singularAction($id)
  {
    // ...
    $comment = new Comment();
    $comment->setPost($post);
    $form = $this->createFormBuilder($comment)
    // The field types here are autoguessed form the data object
    ->add('task')
    ->add('dueDate')
    // Submit isn't part of data object so we add it
    ->add('save', SubmitType::class, array('label' => 'Create Post'))
    ->getForm();

    return $this->render('default/new.html.twig', array(
      'post' => $post,
      // Pass the view object to the template
      'comment_form' => $form->createView(),
    ));
  }
}
