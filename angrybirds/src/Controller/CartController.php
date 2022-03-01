<?php

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cart", name="cart_", requirements={"id" = "\d+"})
 */
class CartController extends AbstractController
{
    /**
     * Displays the cart with all the added birds
     * 
     * @Route("/", name="index")
     * @return void
     */
    public function index(SessionInterface $session)
    {
        // This will get the data of the filled cart thanks to the add method below
        $cart = $session->get('cart', []);
        dd('hello angry', $cart);
    }

    /**
     * Enables to add a new bird to the cart
     * 
     * @Route("/add/{id}", name="add")
     * @return void
     */
    public function add($id, SessionInterface $session)
    {
        // The class specifies the requirement of digital value so no need to typehint $id in this method add
        // We need to get the data stored in the cart
        // the method get will allow us to get the data in the cart if there is some but will return an empty array if not by default

        $cart = $session->get('cart', []);

        // Here is the checking of existence of ID in the cart 
        // Then if id exists then we can fill the empty array by incrementation of $id ++
        if(isset($cart[$id])) {
            $cart[$id] = $cart[$id] +1;
        } else {
            // if 1st time we click then value will now be updated to 1 qty. It avoids to get a result = null
            // The array is no more empty now
            $cart[$id] = 1;
        }

        // Now we need to save the new data in the cart with session
        $session->set('cart', $cart);
        // dd('hey ads' . $id, $cart);
        
        // For user experience we redirect to another page after the add of 1 Birds
        // We use redirectToRoute from the AbstractController
        return $this->redirectToRoute('cart_index');
    }
}
