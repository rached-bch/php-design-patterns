<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Repository\PostRepository;
use App\DesignPatterns as DP;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="")
     * @Template
     */
    public function index(PostRepository $postRepository)
    {
        // $sing1 = DP\Singleton::getInstance();
        // $sing2 = DP\Singleton::getInstance();
        // if($sing1 === $sing2) {
        //     echo "Singleton OK";
        // } else {
        //     echo "Problem";
        // }
        ###################
        $databaseConfiguration = new Dp\DependencyInject\DatabaseParams("localhost", "root", "hellouser", "symfony_db");
        $databaseConnection = DP\DependencyInject\DatabaseConnection::getInstance($databaseConfiguration);
        dump($databaseConnection);
        ################
        $posts = $postRepository->findAll();

        return [
            'posts' => $posts
        ];
    }
}
