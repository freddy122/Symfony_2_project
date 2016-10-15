<?php

namespace AppProd\GedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppProdGedBundle:Default:index.html.twig', array('name' => $name));
    }
}
