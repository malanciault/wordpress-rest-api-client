<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Posts
 * @package Malanciault\WpApiClient\Endpoint
 */
class Planetair extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/planetair/v1/portfolio';
    }
}