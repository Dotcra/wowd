<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FuckController extends Controller
{
    /**
     * @Route("/fuck", name="fuck")
     */
    public function index()
    {
        return $this->render('fuck/index.html.twig', [
            'controller_name' => 'FuckController',
        ]);
    }
}
