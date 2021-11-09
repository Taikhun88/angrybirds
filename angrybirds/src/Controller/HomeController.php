<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController{
 /**
  * This method displays the homepage, list of all birds
  *
  * @return void
  */
  public function home()
  {
      //dd('Hello World!');
      // this method has its route name and url defined in file routes.yaml
      // initially without injection of Response, symfony can only return object. 
      return new Response('<h1>Hello Angry Birds!</h1>');
  }
}