<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        $products = ['TV', 'smartphone', 'ordinateur'];
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}
