<?php declare(strict_types=1);

namespace App\Controller;

use App\Action\Page\CreateAccountPage;
use App\Action\Page\AccountPage;
use App\Action\Page\HomePage;
use App\Action\Page\LoginPage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/')]
class MainController
{
    #[Route('')]
    public function index(HomePage $homePage, Request $request): Response
    {
        return $homePage->run($request);
    }

    #[Route('/create-account')]
    public function createAccountPage(CreateAccountPage $createAccountPage, Request $request): Response
    {
        return $createAccountPage->run($request);
    }

    #[Route('/login')]
    public function loginPage(LoginPage $loginPage, Request $request): Response
    {
        return $loginPage->run($request);
    }

    #[Route('/account')]
    public function accountPage(AccountPage $accountPage, Request $request): Response
    {
        return $accountPage->run($request);
    }
}
