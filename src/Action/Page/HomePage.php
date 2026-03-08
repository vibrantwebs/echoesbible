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
        $echoId = $request->attributes->getInt('echoId');

        if (!$echoId) {
            $echoId = 1;
        }

        error_log("Echo ID: $echoId");

        /**
         * Default to our first-ever echo (Numbers and Corinthians)
         * Otherwise render the specific echo template.
         */
        $templateFilename = "echoes/$echoId.html.twig";

        return new Response(
            $this->twig->render($templateFilename)
        );
    }
}
