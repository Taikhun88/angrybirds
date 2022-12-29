<?php 

namespace App\Controller;

use App\Model\Birds;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * We group the routes with this syntax above the class, it will give a prefix to all routes created within the class
 * @Route("/api", name="api_", requirements={"id":"\d+"})
 */
#[Route('/api', name: 'api_', requirements: ['id' => '\d+'])]
class ApiController extends AbstractController {
    #[Route('/', name: 'list')]
    public function list(): JsonResponse {
        // dd('hello api list');
        $birdModel = new Birds();
        $birds = $birdModel->getBirds();

        return $this->json($birds);
    }

    #[Route('/{id}', name: 'show')]
    public function show(int $id): JsonResponse {
        // dd($id);
        $birdModel = new Birds();
        $birdId = $birdModel->getBirdById($id);

        return $this->json($birdId);
    }
}