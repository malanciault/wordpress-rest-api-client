<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Users
 * @package Malanciault\WpApiClient\Endpoint
 */
class Users extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/users';
    }
}
