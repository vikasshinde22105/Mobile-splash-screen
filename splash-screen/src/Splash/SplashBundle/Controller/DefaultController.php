<?php

namespace Splash\SplashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name='test')
    {
        return $this->render('SplashSplashBundle:Default:index.html.twig', array('name' => $name));
    }
   
}
