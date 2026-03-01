<?php declare(strict_types=1);

namespace App\Controller;

use App\Action\Page\CreateAccountPage;
use App\Action\Data\SidePaneData;
use App\Action\Page\AccountPage;
use App\Action\Page\LoginPage;
use App\Action\Page\HomePage;
use App\Action\Data\Logout;
use App\Action\Data\Login;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/')]
class MainController
{
    #[Route('', methods: ['GET'])]
    public function index(HomePage $homePage, Request $request): Response
    {
        return $homePage->run($request);
    }

    #[Route('/side-pane-data', methods: ['POST'])]
    public function sidePaneData(SidePaneData $sidePaneData, Request $request): Response
    {
        return $sidePaneData->run($request);
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

    #[Route('/logout', methods: ['POST'])]
    public function logout(Logout $logout, Request $request): Response
    {
        return $logout->run($request);
    }

    /**
     * For at least a little while longer, we need to give the users a path "back" in case we decide our
     * direction is wrong.
     *
     * Always have index pointing to latest.
     *
     */
    #[Route('/5', methods: ['GET'])]
    public function versionFive(HomePage $homePage, Request $request): Response
    {
        return $homePage->run($request);
    }
}
