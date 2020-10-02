<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
    public function acceuil(){
        return $this->render('home/acceuil.html.twig');
        

    }
}
