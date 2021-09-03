<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CheatsController extends AbstractController
{
    /**
     * @Route("/cheats/", name="cheats")
     */
    public function cheats(Request $request)
    {
        return $this->render('cheats.html.twig', [
        ]);
    }
}