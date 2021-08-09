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
        return new JsonResponse(["data" => "Hello World!"]);
    }

}
