<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
//    #[Route('/', name: 'homepage')]
    #[Route('/hello/{name}', name: 'homepage')]
    public function index(string $name = ''): Response
    {
        $greet = '';
        // if ($name = $request->query->getUser Driver('hello')) {
        if ($name) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
//        return $this->render('conference/index.html.twig', [
//            'controller_name' => 'ConferenceController',
//        ]);
        return new Response(<<<EOF
            <html>
                <body>
                $greet
                    <img src="https://symfony.com/doc/6.2en//the-fast-track/_images/under-construction-homepage.png" />
                </body>
            </html>
            EOF
        );
    }
}
