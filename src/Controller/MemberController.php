<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    /**
     * @Route("/member", name="member")
     */
    public function connect()
    {
        return $this->render('member/connect.html.twig', [
            'data' => 'je suis fort !'
        ]);
    }
}
