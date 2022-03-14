<?php

namespace App\Controller;

use App\Model\TestOddEven;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestCycleController extends AbstractController
{
    /**
     * Displays html li with cycle css style thanks to TWIG cycle method odd even
     * 
     * @Route("/test", name="test")
     * 
     * @return Response
     */
    public function oddEven()
    {
        $test = "Test";
        $oddEvenValueClass = new TestOddEven();
        $oddEvenValues = $oddEvenValueClass->getOddEvenValues();

        // dd($test);

        return $this->render('home/test.html.twig', [
            "cycleTest" => $test,
            "valuesTest" => $oddEvenValues
        ]);
    }
}
