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
        // dd('hello angry', $cart);
        // We initiate an empty array that will be filled with new data, ID only from the data of model birds.php
        $birds = [];
        
        // we Instantiate the class Birds so we can use its methods and use the data
        $birdModel = new Birds();
        // as Its an associative array, we loop it with for each to get data of ID and qty
        foreach ($cart as $id => $quantity) {
            // $quantity will be the new data created for containing the data.
            // dump($id . ' - ' . $quantity);
            $birdData = $birdModel->getBirdById($id);
            // Now that we get the quantity we store them 
            $birdData['quantity'] = $quantity;
            // Finally we update the array of birdData by adding the quantity
            $birds[$id] = $birdData;
        }

        return $this->render('cart/index.html.twig', [
            'birds' => $birds
        ]);
    }

    /**
     * Enables to add a new bird to the cart
     * I add methods within route even though I do not use FORM as its better to get a more precise route when called. This acts like a restriction to other ways
     * @Route("/add/{id}", name="add", methods={"GET"})
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

        // addFlash displays a message that can be displayed on front by using variable twig app.flashes
        //This method needs as 1st parameter a variable name then the message

        $this->addFlash('success', "L'oiseau numéro $id a bien été ajouté à votre panier!");
        
        // For user experience we redirect to another page after the add of 1 Birds
        // We use redirectToRoute from the AbstractController
        return $this->redirectToRoute('cart_index');
    }
}
