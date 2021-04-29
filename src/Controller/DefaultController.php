<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
    
    /**
     * @Route("/repeticiones/{repes}")
     */
    public function repetirTexto(int $repes=20)
    {
        return $this->render('Practicas/tituloRepetido.html.twig', ['numeroParametro' => $repes]);
    }
}
