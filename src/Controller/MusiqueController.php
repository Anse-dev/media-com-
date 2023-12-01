<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MusiqueController extends AbstractController
{


  #[Route("/music/{id?}/{slug?}", methods: ["GET"], name: "listesMusiques")]
  public function musiques($id, $slug)
  {

    $musiques = [
      'artistes' =>
      [
        "Safarel",
        "Debordo",
        "Gadji Celi",
      ],



    ];

    return $this->render("/musique/musique.html.twig", $musiques);
  }
}
