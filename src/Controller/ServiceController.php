<?php

declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends AbstractFOSRestController
{
    /**
     * @Rest\POST("/index", name="service_index")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ServiceController.php',
        ]);
    }

    /**
     * @Rest\POST("/stop", name="service_stop")
     */
    public function stop(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ServiceController.php',
        ]);
    }
}
