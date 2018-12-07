<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Livre;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;

class LivreController extends FOSRestController
{
    /**
    * @Rest\Get("/books")
    */
    public function getAction()
    {
    $result = $this->getDoctrine()->getRepository(Livre::class)->findAll();
    if ($result === null) 
        return new View("there are no tasks", Response::HTTP_NOT_FOUND);
    return $result;
    }
}
