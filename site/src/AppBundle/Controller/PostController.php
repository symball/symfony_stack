<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/post/{id}", name="post")
     */
    public function indexAction($id)
    {
      $post = $this->get('doctrine_mongodb')
        ->getManager()
        ->createQueryBuilder('AppBundle:Post')
        ->field('id')->equals($id)
        ->getQuery()
        ->getSingleResult();


        return $this->render('post/singular.html.twig', array(
            'post' => $post
        ));
    }
}
