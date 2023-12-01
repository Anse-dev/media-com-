<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;



class MonEspaceController extends AbstractController
{


  #[Route("/monespace", methods: ["GET"], name: "monespace")]
  public function musiques()
  {
    $this->denyAccessUnlessGranted("ROLE_ADMIN", null, "Vous n'avez pas droit à cette page");
    $user =  $this->getUser();
    return $this->render("/monespace/index.html.twig", [
      "user" => $user
    ]);
  }
}
