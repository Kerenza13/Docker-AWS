<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class RECUCController
{
#[Route('/api/RECUC', name: 'api_RECUC')]
public function index(): Response
{
return new Response('Symfony de Carlos Morillas Delgado Responde a la llamada de React');
}
}
