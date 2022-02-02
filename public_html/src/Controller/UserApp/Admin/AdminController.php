<?php

namespace App\Controller\UserApp\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class AdminController extends AbstractController
{
    public function loginPage()
    {
        return $this->render('App/Admin/loginPage.html.twig');
    }
    public function manageUsers()
    {
        return $this->render('App/Admin/manageUsersPage.html.twig');
    }
    public function manageAccountPage()
    {
        return $this->render('App/Admin/manageAccountPage.html.twig');
    }
    public function dashboardPage()
    {
        return $this->render('App/Admin/dashboardPage.html.twig');
    }
    public function manageComments()
    {
        return $this->render('App/Admin/manageCommentsPage.html.twig');
    }
    public function manageAnnouncements()
    {
        return $this->render('App/Admin/manageAnnouncementsPage.html.twig');
    }
}