<?php

namespace Hibuk\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('HibukCoreBundle:Core:index.html.twig');
    }
}
