<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class MusiqueController
{


  #[Route("/musiques/{id?}/{slug?}")]
  public function musiques($id, $slug)
  {
    if ($id && $slug) {
      die("voici l'id de la musique :$id et slug $slug");
    } else {

      die("Toutes mes musiques");
    }
  }
}
