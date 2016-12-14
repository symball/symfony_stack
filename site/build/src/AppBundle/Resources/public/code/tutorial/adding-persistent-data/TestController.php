<?php
// src/AppBundle/Controller/TestController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Return a Symfony simple HTTP response without template
use Symfony\Component\HttpFoundation\Response;
// Include the post data class
use AppBundle\Entity\Post;

class TestController extends Controller
{
    /**
     * @Route("/test", name="test")
     */
    public function indexAction()
    {
      // Get the entity manager which will handle the save operation
      $em = $this->getDoctrine()->getManager();

      $post = new Post();
      $post->setTitle('First Post');
      // Slash before DateTime for accessing global namespace
      $post->setCreatedAt(new \DateTime());
      $post->setSummary('A new channel has risen');
      $post->setContent(‘<p>lorem</p>);

      // Telling Doctrine to save the object
      $em->persist($post);

      // You can create again once persisted
      $post = new Post();
      $post->setTitle('Who are we?');
      $post->setCreatedAt(new \DateTime());
      $post->setSummary('An update on what it is we do');
      $post->setContent('<p>Content</p>');
      $em->persist($post);

      // Perform the actual database operation
      $em->flush();

      return new Response('Entity has been saved to the DB');
    }
}
