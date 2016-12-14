<?php
// src/AppBundle/Controller/BlogController.php

class BlogController extends Controller
{
  // ...

  /**
   * @Route("/blog/{id}", name="blog_singular")
   */
  public function singularAction($id)
  {
    $post = $this->getDoctrine()
    ->getRepository('AppBundle:Post')
    ->find($id);

    // replace this example code with whatever you need
    return $this->render('blog/singular.html.twig', ['post' => $post]);
  }
}
