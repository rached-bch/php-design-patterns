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
        ################### singleton <<
        $sing1 = DP\Singleton::getInstance();
        $sing2 = DP\Singleton::getInstance();
        if($sing1 === $sing2) {
            echo "Singleton OK";
        } else {
            echo "Problem";
        }
        ################### singleton >>
        ################### dependency injection <<
        $databaseConfiguration = new Dp\DependencyInject\DatabaseParams("localhost", "root", "hellouser", "symfony_db");
        $databaseConnection = DP\DependencyInject\DatabaseConnection::getInstance($databaseConfiguration);
        dump($databaseConnection);
        ################### dependency injection <<
        ################### decorator <<
        $roomBooking = new Dp\Decorator\RoomBooking();
        $extraBedDecorator = new Dp\Decorator\ExtraBedDecorator($roomBooking);
        dump("extra bed room price", $extraBedDecorator->calculatePrice());
        ################### decorator >>
        ################### adapter <<
        $paperBook = new Dp\AdapterWrapper\PaperBook();
        $kindleEbook = new Dp\AdapterWrapper\KindleEbook();
        $kidleBookAdaptedForPaper = new Dp\AdapterWrapper\EbookAdapter($kindleEbook);
        dump("name :", $kidleBookAdaptedForPaper->getName(), "turn page ebook :", $kidleBookAdaptedForPaper->turnPage());
        ################### adapter >>
        $posts = $postRepository->findAll();

        return [
            'posts' => $posts
        ];
    }
}
