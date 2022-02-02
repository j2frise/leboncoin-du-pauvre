<?php

namespace App\Controller\UserApp\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class UserController extends AbstractController
{
    public function loginPage()
    {
        return $this->render('App/User/loginPage.html.twig');
    }

    public function registerPage()
    {
        return $this->render('App/User/registerPage.html.twig');
    }
    public function publicationPage()
    {
        return $this->render('App/User/publicationPage.html.twig');
    }
    public function favoritesPage()
    {
        return $this->render('App/User/favoritesPage.html.twig');
    }
    public function manageAccountPage()
    {
        return $this->render('App/User/manageAccountPage.html.twig');
    }
}