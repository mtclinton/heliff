<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig', [

        ]);

    }

    /**
     * @Route("/test")
     */
    public function show()
    {
        return new Response('Future page to show a test!');
    }

    /**
     * @Route("/content/{slug}")
     */
    public function content($slug)
    {
        return new Response(sprintf(
            'Future page to show the content "%s"!',
            $slug
        ));
    }
}