<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(Request $request): Response
    {
        return $this->render('default/index.html.twig');
    }

    #[Route('/session-start', name: 'app_session_start')]
    public function sessionStart(Request $request): Response
    {
        $request->getSession()->set('_started', true);

        return $this->redirectToRoute('app_default');
    }

    #[Route('/session-clear', name: 'app_session_clear')]
    public function sessionClear(Request $request): Response
    {
        $request->getSession()->clear();

        return $this->redirectToRoute('app_default');
    }
}
