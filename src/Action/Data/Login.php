<?php declare(strict_types=1);

namespace App\Action\Data;

use App\Service\AccountService;
use App\Action\AbstractAction;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class Login extends AbstractAction {

    public function __construct(private readonly AccountService $twig)
    {}

    public function run(Request $request): Response
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        

        return new JsonResponse([
            'message' => 'You logged in!'
        ]);
    }
}
