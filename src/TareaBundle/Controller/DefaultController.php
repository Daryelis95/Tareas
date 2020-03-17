<?php

namespace TareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TareaBundle:Default:index.html.twig');
    }

    public function nombreAction()
    {
        return $this->render('TareaBundle:Default:nombre.html.twig');
    }
}
