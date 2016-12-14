<?php
// # src/AppBundle/Controller/BlogController.php
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
  /**
   * @Route("/blog/{id}", name="blog_singular")
   */
  public function singularAction($id, Request $request)
  {
    // ...
    if ($form->isSubmitted() && $form->isValid()) {
      // Comment object automatically updated on form success, save to DB
      $em = $this->getDoctrine()->getManager();
      $em->persist($task);
      $em->flush();
    }
    // ...
  }
}
