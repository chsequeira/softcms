<?php
namespace Application\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{

    public function indexAction(){
        return $this->render("HomeBundle:Home:index.twig.html");
    }
}
