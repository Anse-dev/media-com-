<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController
{



  #[Route("/")]
  public function homepage()
  {
    die("Hello world");
  }
}
