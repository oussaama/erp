<?php

namespace ERPBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class ErrorRedirect
{
    /**
     * Holds Symfony2 router
     *
     *@var Router
     */
    protected $router;

    /**
     * @param Router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }


    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();

        if ($exception instanceof NotFoundHttpException) {

            /** Choose your router here */
            $route = '';

            if ($route === $event->getRequest()->get('_route')) {
                return;
            }

            $url = $this->router->generate('pageNotFound');
            $response = new RedirectResponse($url);
            $event->setResponse($response);

        }
    }
} 