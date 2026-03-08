<?php declare(strict_types=1);

namespace App\Action\Data;

use App\Service\AccountService;
use App\Action\AbstractAction;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class AccountData extends AbstractAction {

    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly AccountService $accountService
    )
    {}

    public function run(Request $request): Response
    {
        $userId = $this->accountService->getSessionUserId();

        $user = false;
        if ($userId) {
            $user = $this->em->find(User::class, $userId);
        }

        return new JsonResponse($user);
    }
}
