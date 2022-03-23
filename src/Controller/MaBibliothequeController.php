<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaBibliothequeController extends AbstractController
{
    /**
     * @Route("/mabibliotheque", name="app_ma_bibliotheque")
     */
    public function index(): Response
    {
        return $this->render('ma_bibliotheque/index.html.twig', [
            'controller_name' => 'MaBibliothequeController',
        ]);
    }
}
