<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Blog\Article;

class PostController extends Controller
{
    /**
     * @Route("/post", name="poster")
     */
    public function posterAction()
    {
        $article = new Article();
        $article -> setTitle('Premier article')
            ->setAuthor('Lapin Courge')
            ->setContent('Premier article');

        $em = $this -> getDoctrine() ->getManager();
        $em -> persist($article);
        $em -> flush();

        // replace this example code with whatever you need
        return $this->render('blog/poster.html.twig', [
            'current_menu' => 'poster'
        ]);
    }
}