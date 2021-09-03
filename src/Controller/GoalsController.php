<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GoalsController extends AbstractController
{
    /**
     * @Route("/goals/", name="goals")
     */
    public function goals(Request $request)
    {
        return $this->render('goals.html.twig', [
        ]);
    }

}