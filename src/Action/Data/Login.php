<?php declare(strict_types=1);

namespace App\Action\Data;

use App\Entity\User;
use App\Service\AccountService;
use App\Action\AbstractAction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class Login extends AbstractAction {

    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly AccountService $accountService
    )
    {}

    public function run(Request $request): Response
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $user = $this->em->getRepository(User::class)->findOneBy([
            'email' => $email,
        ]);

        // todo: throw exception
        if (empty($user)) {
            return new JsonResponse([
                'message' => 'User not found!',
            ], Response::HTTP_BAD_REQUEST);
        }

        // todo: check submitted password against encrypted password
        if (!empty($user)) {
            $password = $user->getEncryptedPassword();
        }

        $userId = $user->getId();

        $this->accountService->startUserSession($userId);

        return new JsonResponse([
            'message' => 'You logged in!'
        ]);
    }
}
