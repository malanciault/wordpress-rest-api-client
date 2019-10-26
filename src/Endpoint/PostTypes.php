<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class PostTypes
 * @package Malanciault\WpApiClient\Endpoint
 */
class PostTypes extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/types';
    }
}
