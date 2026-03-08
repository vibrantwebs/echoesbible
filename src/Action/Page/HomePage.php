<?php declare(strict_types=1);

namespace App\Action\Page;

use App\Action\AbstractAction;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class HomePage extends AbstractAction {

    public function __construct(private readonly Environment $twig)
    {}

    public function run(Request $request): Response
    {
        $version = basename(parse_url($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], PHP_URL_PATH));

        /**
         * If trailing slug is an integer, look for that versioned home page in /previous
         */
        $templateFilename = 'home.html.twig';
        if (!empty($version) && is_integer($version)) {
            $templateFilename = "previous/home$version.html.twig";
        }

        return new Response(
            $this->twig->render($templateFilename)
        );
    }
}
