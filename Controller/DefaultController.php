<?php

namespace Ponteiro\GraphicsAndChartsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PonteiroGraphicsAndChartsBundle:Default:index.html.twig', array('name' => $name));
    }
}
