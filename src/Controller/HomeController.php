<?php

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  #[Route('/', name: 'home')]
  public function home(SessionInterface $session): Response
  {
    //dd('Hello World!');
    // this method has its route name and url defined in file routes.yaml
    // initially without injection of Response, symfony can only return object. 
    $birdsModel = new Birds();
    $birds = $birdsModel->getBirds();
    // dd($birds);

    $lastBirdVisited = $session->get('lastBirdVisited');
    // var_dump($lastBirdVisited);

    return $this->render('home/home.html.twig', [
      'title' => "Hello Angry Birds",
      'birds' => $birds,
      'lastBirdVisited' => $lastBirdVisited
    ]);
  }
}