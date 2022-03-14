<?php 

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * We group the routes with this syntax above the class, it will give a prefix to all routes created within the class
 * @Route("/api", name="api_", requirements={"id":"\d+"})
 */
class ApiController extends AbstractController {
    /**
     * Displays a list of birds in JSON format
     * 
     * @Route("/", name="list")
     * @return Response
     */
    public function list() {
        // dd('hello api list');
        $birdModel = new Birds();
        $birds = $birdModel->getBirds();

        return $this->json($birds);
    }

    /**
     * Displays the details of bird by ID JSON format
     * 
     * @Route("/{id}", name="show")
     * 
     * @param int $id
     * @return Response
     */
    public function show($id) {
        // dd($id);
        $birdModel = new Birds();
        $birdId = $birdModel->getBirdById($id);

        return $this->json($birdId);

    }
}