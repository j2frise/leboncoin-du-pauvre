<?php

namespace App\Controller\UserApp\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    public function homepage()
    {
        return $this->render('App/Home/home.html.twig');
    }
}