<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cart", name="cart_")
 */
class CartController extends AbstractController
{
    /**
     * Displays the cart with all the added birds
     * 
     * @Route("/", name="index")
     * @return void
     */
    public function index()
    {
        dd('hello angry');
    }

    /**
     * Enables to add a new bird to the cart
     * 
     * @Route("/add/{id}", name="add")
     * @return void
     */
    public function add($id)
    {
        dd('hey ads' . $id);
    }
}
