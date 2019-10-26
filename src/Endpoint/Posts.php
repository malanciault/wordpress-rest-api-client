<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Posts
 * @package Malanciault\WpApiClient\Endpoint
 */
class Posts extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/posts';
    }
}
