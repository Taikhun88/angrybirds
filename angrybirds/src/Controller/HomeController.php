<?php

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * Displays the homepage with list of all birds
   * This methods displays the route thanks to annotations.yaml and uses injection of Route above
   * 
   * @Route("/")
   * 
   * return Response
   */
  public function home(): Response
  {
    //dd('Hello World!');
    // this method has its route name and url defined in file routes.yaml
    // initially without injection of Response, symfony can only return object. 
    $birdsModel = new Birds();
    $birds = $birdsModel->getBirds();
    // dd($birds);
    return $this->render('home/home.html.twig', [
      'title' => "Hello Angry Birds",
      'birds' => $birds
    ]);
  }

  /**
   * Use the method getPDF from the entity file birds.php 
   * 
   * @Route("/", name="download")
   */
  public function download(){
    $pdfDownload = new Birds();
    $file = $pdfDownload->getPdfDownload();

    return $this->render('home/home.html.twig', [
      'downloadPdf' => $file
    ]);
  }
}
