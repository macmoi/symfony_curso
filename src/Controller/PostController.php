<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController {

    /**
     * I've used the route annotation for indicate the matching url to this method
     *
     * @Route("post/home")
     */
    public function home() {
        $mName = 'Pruebas';
        return new Response(
            "<html><body><h1>$mName</h1></body></html>"
        );
    }
}
