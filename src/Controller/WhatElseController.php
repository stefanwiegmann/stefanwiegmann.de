<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WhatElseController extends AbstractController
{
    /**
    * @Route("/whatelse", name="whatelse")
    */
    public function whatelse()
    {
      return $this->render('whatelse/whatelse.html.twig');
    }
}
