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
   * @Route("/bird/{id}", name="bird_show", requirements={"id" : "\d+"})
   * 
   * @return Response
   */
  public function show($id){

    $birdModel = new Birds();
    $birdData = $birdModel->getBirdById($id);
    //dd($birdData);

    // In case bird id does not exist we display a customized message to the user
    if($birdData === false){
      throw $this->createNotFoundException("L'oiseau $id n'existe pas");
    }

    return $this->render('home/show.html.twig', [
      'bird' => $birdData
    ]);
  }
}