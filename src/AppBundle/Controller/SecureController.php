<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/secure")
 */
class SecureController extends Controller
{
    /**
     * @Route("/", name="secure.home")
     * @Template("secure/index.html.twig")
     */
    public function indexAction()
    {
        return [];
    }
}
