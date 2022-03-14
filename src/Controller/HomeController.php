<?php 

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
  /**
   * Displays the homepage with list of all birds
   * This methods displays the route thanks to annotations.yaml and uses injection of Route above
   * 
   * @Route("/", name="home")
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

  // /**
  //  * Download immediately the file after 1 click
  //  * 
  //  * @Route("/", name="download_pdf")
  //  */
  // public function download(): Response
  // {
  //   // load the file from the filesystem
  //   $file = new File('/files/angry_birds_2015_calendar.pdf');
  //   // send the file contents and force the browser to download it
  //   $downloadFile = $this->file($file);
  //   dd($downloadFile);
  //   // return $downloadFile; 
  // }
}