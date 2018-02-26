<?php

namespace ToPdfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ToPdfBundle:Default:index.html.twig');
    }
}
