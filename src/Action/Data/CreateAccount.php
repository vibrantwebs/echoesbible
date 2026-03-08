<?php declare(strict_types=1);

namespace App\Action\Data;

use App\Service\AccountService;
use App\Action\AbstractAction;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class CreateAccount extends AbstractAction {

    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly AccountService $accountService
    )
    {}

    public function run(Request $request): Response
    {
        $firstName = $request->request->get('firstName');
        $lastName = $request->request->get('lastName');
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $confirmPassword = $request->request->get('confirmPassword');

        // todo: check password match, valid email, account pre-exists, etc.

        /**
         * Create the user record.
         */
        $user = new User($firstName, $lastName, $email, $password);
        $this->em->persist($user);
        $this->em->flush();

        /**
         * Log them in.
         */
        $this->em->refresh($user);
        $userId = $user->getId();
        $this->accountService->startUserSession($userId);

        return new JsonResponse([
            'message' => 'You logged in!'
        ]);
    }
}
