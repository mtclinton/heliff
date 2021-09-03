<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RulesController extends AbstractController
{

    /**
     * @Route("/rules/", name="rules")
     */
    public function rules(Request $request)
    {
        return $this->render('rules.html.twig', [
        ]);
    }
}
