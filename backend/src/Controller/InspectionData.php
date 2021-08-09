<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * InspectionData
 *
 * @author Gigabyte Software Limited
 * @copyright Gigabyte Software Limited
 */
class InspectionData extends AbstractController
{
    #[Route('/data', name: 'data', methods: ['GET'])]
    public function getData(): Response
    {
        $windTurbineOutput = [];
        for ($i=1; $i<=100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $windTurbineOutput[] = 'Coating Damage and Lightning Strike';
            } elseif ($i % 3 === 0) {
                $windTurbineOutput[] = 'Coating Damage';
            } elseif ($i % 5 === 0) {
                $windTurbineOutput[] = 'Lightning Strike';
            } else {
                $windTurbineOutput[] = $i;
            }
        }

        return new JsonResponse(["data" => $windTurbineOutput]);
    }
}
