<?php
/**
 * Created by PhpStorm.
 * User: jefferson-dev
 * Date: 21/12/18
 * Time: 09:08
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! Minha primeira paágina está funcionando!');
    }

    /**
     * @Route("/news/{id}/{slug}")
     */
    public function show($slug, $id)
    {
        return new Response(sprintf(
            'Parametros: %s, %s', $slug, $id
        ));
    }
}