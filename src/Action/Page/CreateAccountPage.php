<?php declare(strict_types=1);

namespace App\Action\Page;

use App\Action\AbstractAction;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class CreateAccountPage extends AbstractAction {

    public function __construct(private readonly Environment $twig)
    {}

    public function run(Request $request): Response
    {
        return new Response(
            $this->twig->render('create-account.html.twig')
        );
    }
}
