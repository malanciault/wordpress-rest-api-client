<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Tags
 * @package Malanciault\WpApiClient\Endpoint
 */
class Tags extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/tags';
    }
}
