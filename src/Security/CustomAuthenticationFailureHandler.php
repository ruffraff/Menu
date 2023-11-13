<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\HttpFoundation\Request;

class CustomAuthenticationFailureHandler implements AuthenticationFailureHandlerInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception):Response
    {
        // You can perform additional logic here, e.g., logging the failed login attempt.

        // Redirect to the desired page after a failed login
        return new RedirectResponse($this->router->generate('your_failure_route'));
    }
}
