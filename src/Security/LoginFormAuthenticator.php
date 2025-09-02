<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\PassportInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private $urlGenerator;
    private $appKernel;

    public function __construct(UrlGeneratorInterface $urlGenerator, KernelInterface $appKernel)
    {
        $this->urlGenerator = $urlGenerator;
        $this->appKernel = $appKernel;
    }

    public function supports(Request $request): bool
    {
        return self::LOGIN_ROUTE === $request->attributes->get('_route') && $request->isMethod('POST');
    }

    public function authenticate(Request $request): PassportInterface
    {
        $username = $request->request->get('username', '');
        $password = $request->request->get('password', '');

        $request->getSession()->set(Security::LAST_USERNAME, $username);

        $loadUser = function ($userIdentifier) use ($password) {
            $user = User::findUserByName($userIdentifier, $password, $this->appKernel);
            if($user != null && $user->getWebResetPassword()) {
                throw new \Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException('Debe cambiar su clave de acceso');
            }
            return $user;
        };

        return new SelfValidatingPassport(new UserBadge($username, $loadUser));
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        $user = User::findUserByName($credentials['email'], $credentials['password'], $this->appKernel);
        if (!$user) {
            throw new CustomUserMessageAuthenticationException('Usuario no válido');
        }

        if($user->getWebResetPassword()) {
            throw new CustomUserMessageAuthenticationException('Debe cambiar su clave de acceso');
        }

        return $user;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): RedirectResponse
    {
        $user = $token->getUser();
        $user->setClient($user->getClient(), $request->getSession());

        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
