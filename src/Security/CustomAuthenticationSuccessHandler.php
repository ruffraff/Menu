<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class CustomAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private $router;
    private $tokenStorage;

    public function __construct(RouterInterface $router, TokenStorageInterface $tokenStorage)
    {
        $this->router = $router;
        $this->tokenStorage = $tokenStorage;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token):Response
    {
        // You can perform additional logic here, e.g., storing user data in the session.

        // Redirect to the desired page after successful login
        return new RedirectResponse($this->router->generate('meal'));
    }
}