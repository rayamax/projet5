<?php
/**
 * Created by PhpStorm.
 * User: cheva
 * Date: 28/08/2018
 * Time: 13:56
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('Omg ! It works');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
                'Future page to show the article: %s',
                $slug
            ));
    }
}
