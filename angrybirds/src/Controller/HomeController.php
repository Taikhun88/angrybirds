<?php

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * Displays the homepage with list of all birds
   * This methods displays the route thanks to annotations.yaml and uses injection of Route above
   * 
   * @Route("/", name="home")
   * 
   * return Response
   */
  public function home(SessionInterface $session): Response
  {
    // dd('Hello World!');
    // this method had initially its route name and url defined in file routes.yaml
    // Now we use the injection of the Response 
    
    // To display all data related to the birds we need to call, to instantiate them 
    $birdsModel = new Birds();
    // Once lnstantiated, we can use the methods inside and here we need getBird
    $birds = $birdsModel->getBirds();
    // dd($birds);

    // We want to display the birdcard we have previously visited
    // Therefore we need to keep in memory thanks to Session
    // These methods are available in SessionInterface. 
    // $session is an object providing the required method to get data set in the birdController
    $lastBirdVisited = $session->get('lastBirdVisited');
    $imageLastBirdVisited= $session->get('imageLastBirdVisited');
    // var_dump($lastBirdVisited);

    // Display of objects are enabled thanks to render method in AbstractController class
    return $this->render('home/home.html.twig', [
      'title' => "Hello Angry Birds",
      'birds' => $birds,
      'lastBirdVisited' => $lastBirdVisited,
      'imageLastBirdVisited' => $imageLastBirdVisited
    ]);
  }
}