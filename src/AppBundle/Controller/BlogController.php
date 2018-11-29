<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homePageAction()
    {
        // replace this example code with whatever you need
        return $this->render('blog/homepage.html.twig');
    }

    /**
     *  @Route("/post/{id}", name="post")
     */
    public function postAction( $id)
    {
        // replace this example code with whatever you need
        return $this->render('blog/homepage.html.twig', [
            'id' => $id,
        ]);
    }
}
