<?php

namespace Malanciault\WpApiClient\Auth;

use Psr\Http\Message\RequestInterface;

/**
 * Interface AuthInterface
 * @package Malanciault\WpApiClient\Auth
 */
interface AuthInterface
{
    /**
     * @param RequestInterface $request
     * @return mixed
     */
    public function addCredentials(RequestInterface $request);
}
