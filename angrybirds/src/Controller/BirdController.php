<?php 

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BirdController extends AbstractController {
  /**
   * Display the details of a bird by clicking on its ID
   * 
   * @Route("/bird/{id}", name="bird_show")
   * 
   * @return Response
   */
  public function show(int $id){

    $birdModel = new Birds();
    $birdData = $birdModel->getBirdById($id);
    //dd($birdData);

    return $this->render('home/show.html.twig', [
      'bird' => $birdData
    ]);
  }
}