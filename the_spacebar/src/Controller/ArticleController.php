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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! Minha primeira paágina está funcionando!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug = null)
    {

        $comments = [
            'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
        ];

        return $this->render('article/show.html.twig', [
            'title' => \ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}