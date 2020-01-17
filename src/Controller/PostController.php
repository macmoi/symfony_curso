<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Spanish (Native Language)
 *
 * Esta clase es para practicar cosas de symfony.
 *
 * Extendemos de AbstractController porque en dicha clase padre disponemos de
 * metodos ultiles para render de plantillas y demas acciones...
 *
 * @author Moises Piñate <moises.pinate@outlook.com>
 */
class PostController extends AbstractController {

    /**
     * I've used the route annotation for indicate the matching url to this method
     *
     * @Route("post/home")
     */
    public function home()
    {
        $mName = 'Pruebas';
        return new Response($mName);
    }

    /**
     * @Route("blog/{post}")
     */
    public function showPost($post)
    {
        return $this->render('posts/post.html.twig', [
            'title' => ucwords(str_replace('-', '', $post))
        ]);
    }
}
