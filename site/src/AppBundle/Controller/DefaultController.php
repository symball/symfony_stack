<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $posts = $this->get('doctrine_mongodb')
        ->getManager()
        ->createQueryBuilder('AppBundle:Post')
        ->getQuery()
        ->execute();


        return $this->render('default/index.html.twig', array(
            'posts' => $posts
        ));
    }
}
