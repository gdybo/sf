<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends Controller
{
    /**
     * @Route("/pizza", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return new Response('Pizza!');
    }
}
