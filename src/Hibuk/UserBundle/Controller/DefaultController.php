<?php

namespace Hibuk\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HibukUserBundle:Default:index.html.twig');
    }
}
