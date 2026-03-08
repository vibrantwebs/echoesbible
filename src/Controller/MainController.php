<?php declare(strict_types=1);

namespace App\Controller;

use App\Action\Page\CreateAccountPage;
use App\Action\Data\CreateAccount;
use App\Action\Data\SidePaneData;
use App\Action\Data\AccountData;
use App\Action\Page\AccountPage;
use App\Action\Page\LoginPage;
use App\Action\Page\HomePage;
use App\Action\Data\Logout;
use App\Action\Data\Login;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController
{
    // todo: If no "/e/{echoId}" specified,
    #[Route('/', methods: ['GET'])]
    #[Route('/e/{echoId}', methods: ['GET'])]
    public function homePage(HomePage $homePage, Request $request): Response
    {
        return $homePage->run($request);
    }
    
    #[Route('/create-account', methods: ['GET'])]
    public function createAccountPage(CreateAccountPage $createAccountPage, Request $request): Response
    {
        return $createAccountPage->run($request);
    }

    #[Route('/login', methods: ['GET'])]
    public function loginPage(LoginPage $loginPage, Request $request): Response
    {
        return $loginPage->run($request);
    }

    #[Route('/account', methods: ['GET'])]
    public function accountPage(AccountPage $accountPage, Request $request): Response
    {
        return $accountPage->run($request);
    }

    #[Route('/login', methods: ['POST'])]
    public function login(Login $login, Request $request): Response
    {
        return $login->run($request);
    }

    #[Route('/create-account', methods: ['POST'])]
    public function createAccount(CreateAccount $createAccount, Request $request): Response
    {
        return $createAccount->run($request);
    }

    #[Route('/logout', methods: ['POST'])]
    public function logout(Logout $logout, Request $request): Response
    {
        return $logout->run($request);
    }

    #[Route('/account-data', methods: ['GET'])]
    public function accountData(AccountData $accountData, Request $request): Response
    {
        return $accountData->run($request);
    }
}
