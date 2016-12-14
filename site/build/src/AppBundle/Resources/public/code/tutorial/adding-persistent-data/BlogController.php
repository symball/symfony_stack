<?php
// src/AppBundle/Controller/TestController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog_index")
     */
    public function indexAction()
    {
      // Select the appropriate entity as a source
      $repository = $this->getDoctrine()
      ->getRepository('AppBundle:Post')
      // Use one of the built in methods
      ->findAll();

      return $this->render("blog/index.html.twig", ["posts" => $posts]);
    }
}
