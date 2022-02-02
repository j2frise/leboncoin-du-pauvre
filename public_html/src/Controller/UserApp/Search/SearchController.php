<?php

namespace App\Controller\UserApp\Search;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class SearchController extends AbstractController
{
    public function searchPage()
    {
        return $this->render('App/Search/searchPage.html.twig');
    }
    public function detailsPage()
    {
        return $this->render('App/Search/itemDetailsPage.html.twig');
    }
}