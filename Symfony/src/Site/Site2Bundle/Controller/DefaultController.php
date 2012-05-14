<?php

namespace Site\Site2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SiteSite2Bundle:Default:index.html.twig', array('name' => $name));
    }
}
