<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TutorialController extends Controller
{
    /**
     * @Route("/tutorial/{title}", name="tutorial")
     */
    public function indexAction($title)
    {
      // Try and load any code assets that may be present
      $tutorial = $this->get('tutorial')
        ->set('tutorial/'.$title);

      return $this->render($tutorial->getInternalReference().'.html.twig', [
        'page_key' => $tutorial->getReference(),
      ]);
    }
}
