<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Posts
 * @package Malanciault\WpApiClient\Endpoint
 */
class Portfolios extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/portfolio';
    }
}
