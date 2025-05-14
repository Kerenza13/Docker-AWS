<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RECUCController
{
    #[Route('/api/recuc', name: 'api_recuc')]
    public function index(): Response
    {
        return new Response('Symfony de Carlos Morillas Delgado Responde a la llamada de React');
    }
}
