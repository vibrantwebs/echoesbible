<?php declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class AccountService
{
    public function __construct(
        private RequestStack $requestStack
    ){}

    public function startUserSession(int $userId) {
        $this->requestStack->getSession()->set('userId', $userId);
    }

    public function endUserSession() {
        $this->requestStack->getSession()->remove('userId');
    }

    public function isUserLoggedIn(): bool {
        return $this->requestStack->getSession()->has('userId');
    }

    public function getSessionUserId(): ?int {
        return $this->isUserLoggedIn()
            ? $this->requestStack->getSession()->get('userId')
            : null;
    }
}